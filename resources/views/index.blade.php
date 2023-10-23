@extends('dashboard')
@section('content')
<style>
    
    .poster {
        float: left;
        width: 30% ;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        overflow: hidden;
    }
    .table-container {
        margin-left: 30%;
        background-color: #23141E;
        width: 70%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        left: 0;
        z-index: -1;
        overflow-x: hidden;
        border: 1px solid black;
    }
    .table-container::-webkit-scrollbar {
        width: 0px;
    }
    .table-container .content-index{
        margin-top: 20px;
        margin-left: 20px;
    }
    hr {
        border: 1px solid #D6B56E;
    }
    h2, h4,h5,p {
        font-family: goldenbook,serif;
        font-style: normal;
    }
    h2, h4,h5 {
        color: #FFFFFF;
    }
    .title:hover h2{
        color: #D6B56E;
    }
    
    .title p{
        color: #FFFFFF;
        margin-bottom: 2px;
        margin-right: 10px;
    }
    .card {
        background-color: transparent;
        border: 1px solid #D6B56E;
        border-radius: 10px;
        color: #FFFFFF;
        elevation: 1;
    }
    .seatplan {
        width: 500px;
        height: 600px;
        border: 1px solid #D6B56E;
        border-radius: 10px;
        elevation: 2;
        box-shadow: 0 0 10px #D6B56E;
    }

    .btn-book {
        background-color: transparent;
        border: 1px solid #D6B56E;
        border-radius: 10px;
        color: #FFFFFF;
        elevation: 1;
    }
    .btn-book:hover {
        background-color: #D6B56E;
        color: #000000;
    }
</style>
<div class="container-details">
    <div>
        <img class="poster" src="{{ asset( 'images/poster.jpeg' ) }}"
        alt="Poster">
    </div>
    <div class="table-container">
        <div class="content-index">
            <div class="title">
                <h2 class="mt-3">2022 IU CONCERT〈The Golden Hour: Under The
                    Orange Sun〉</h2>
                    <p><i class="fa-solid fa-location-dot"
                    style="color: #ffffff; margin-right: 10px"></i>
                    Jamsil Sports Complex - Seoul Olympic Stadium</p>
                    <p><i class="fa-regular fa-hourglass"
                    style="color: #ffffff; margin-right: 10px"></i>
                    2022.09.17 - 2022.09.18</p>
                </div>
                <div class="mt-4">
                    <h4>Seating Plan</h4>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('images/seatplan.jpg') }}"
                        class="seatplan"></img>
                    </div>
                </div>
                <div class="mt-4">
                    <h4>Packages</h4>
                    <hr>
                    @if($ticket->isEmpty())
                        <p style="color:white">No tickets available at the moment.</p>
                    @else
                        @foreach ($ticket as $item)
                        <div class="row mt-3">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-bottom:5px">
                                            {{ $item->category }}</h5>
                                            <p style="opacity: 70%;">
                                                Ticket price includes tax and ticket
                                                processing fee of IDR 25,000,-.</p>
                                                <hr>
                                                <p class="card-text">
                                                    <i class="fa-solid fa-check-to-slot"
                                                    style="color: #ffffff; margin-right: 10px"></i>
                                                    Available seats : {{ $item->stock}}</p>
                                                    <a style="float:right" href="#"
                                                    class="btn btn-outline btn-book">Select Ticket</a>
                                                    <p style=
                                                    "color: #D6B56E;
                                                padding-top: 10px;"
                                                >IDR {{ $item->price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
        
                </div>
            </div>
        </div>
                
@endsection