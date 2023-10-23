@extends('dashboard')

@section('content')

<style>
    .container-about{
        background-color: #331C2B;
        position: fixed;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
        object-fit: cover;
        z-index: -1;
        overflow: hidden;
    }
    .container-about::-webkit-scrollbar {
        width: 0px;
    }

    h2, h4,h5, p {
        font-family: goldenbook,serif;
        font-style: normal;
    }

    h2, h4,h5 {
        color: #FFFFFF; 
    }
    title h4 {
        align-items: center;
    }
    .title:hover h2{
        color: #D6B56E;
    }
    .content-about{
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    .show-merch {
        overflow-y: auto;
        white-space: nowrap;
        width: 80%;
        margin: auto;
        
    }
    .show-merch img {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        transition: transform 0.2s;
    }
    .show-merch img:hover {
        transform: scale(1.08);
        box-shadow: 0 0 10px rgb(214,181,110);
    }
    .show-merch p{
        color: #FFFFFF;
    }
    
    .show-merch .row {
        display: inline-flex;
        flex-wrap: wrap;
    }
    
    .show-merch::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }
    
    .show-merch::-webkit-scrollbar-thumb {
        background-color: #D6B56E;
        border-radius: 4px;
    }
    
    .show-merch::-webkit-scrollbar-track {
        background-color: #23141E;
    }
        
</style>

<?php
    $images = [
        asset('images/merch1.png'),
        asset('images/merch2.png'),
        asset('images/merch3.png'),
    ]
?>


<div class="container-about">
    <div class="content-about">
        <div class="title">
            <h2 class="mt-3">2022 IU CONCERT〈The Golden Hour: Under The Orange Sun〉</h2>
        </div> 
        <h4 class="mt-5">Our Official Merchandise</h4>
            
        <div class="show-merch">
            @if($merchandise->isEmpty())
                <p style="color:white;">No Merchandise available at the moment.</p>
            @else
                <div class="row mt-5 ms-1">
                @foreach ($merchandise as $index => $merch)                
                        <div class="col-6 col-md-4">
                            <img src="{{ $images[$index % count($images)] }}" alt="" width="300px" height="300px">
                            <h5 class="mt-3">{{ $merch->name}}</h5>
                            <p class="mt-3">IDR {{ number_format($merch->price) }}</p>
                        </div>
                @endforeach
                </div>
            @endif
            </div>
            
    </div>


</div>

@endsection