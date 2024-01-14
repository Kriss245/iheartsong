<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- meta tags, title, fonts -->
    <!-- ... -->
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <div class="auth-links-container">
                        <a href="{{ route('login') }}" class="auth-link">Login</a>
                        <a href="{{ route('register') }}" class="auth-link">Register</a>
                    </div>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Welcome to the iheartsong
            </div>
            <div class="playlist-words">
                <p>Harmonize with the rhythm of your soul.</p>
                <p>Weave a symphony with your melodies.</p>
                <p>Embark on an odyssey through lyrical realms.</p>
                <p>Dive deep into the harmonies of your journey.</p>
                <div class="explore-container">
                    <a href="{{ route('login') }}" class="explore-link">Login to Groove</a>
                </div>
            </div>            
        </div>
    </div>
</body>
</html>
