@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 70vh;">
    <div class="text-center">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="content">
            <div class="title m-b-md animated-text">
                Welcome to the iheartsong
            </div>
            <!-- ... (bagian lain dari konten Anda) -->
        </div>        
         <h2 class="paint-emotions">Let Music Paint Your Emotions</h2>
        <p class="music-description">Immerse yourself in our curated playlists, where melodies sculpt emotions into experiences. Sense the rhythm, embrace the moments.</p>
        <!-- You are logged in !! Remove or modify this line as needed -->
    </div>
</div>
@endsection
