@extends('dashboard')

@section('content')
<style>

    .video-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
        object-fit: cover;
        z-index: -1;
        overflow: hidden;
    }

    .title-index {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    .title-index img {
        margin: 0 auto;
        width: 30%;
        height: 30%;
        opacity: 0;
        transform: translateZ(-100px);
        animation: popUp 2.5s ease forwards;
    }

    .title-index .btn-concert {
        margin-top: 5vh;
        margin-bottom: 5vh;
        text-align: center;
        border-radius: 10px;
        border: 1px solid #D6B56E;
        background-color: rgba(0, 0, 0, 0.5);
        color: #FFFFFF;
        opacity: 0;
        transform: translateZ(-100px);
        animation: popUp 2.5s ease forwards;
    }

    @keyframes popUp {
        to {
            opacity: 1;
            transform: translateZ(0);
        }
    }

    .title-index .btn-concert:hover {
        background-color: #D6B56E;
        color: #000000;
    }
</style>

<div class="container-index">
    
    <video autoplay muted loop class="video-background">
        <source src="{{ asset('video/bg.mp4') }}" type="video/mp4">
    </video>
    <div class="title-index">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <a class="btn btn-outline btn-concert text-center"
        href="{{ url('ticket') }}">Check for more details</a>
    </div>
</div>


@endsection