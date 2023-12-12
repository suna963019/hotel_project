@extends('layouts.page')

@section('title', 'home')

@section('content')
    <div>
        <div class="main1 home">
            <img src="{{ url('img/nara1-2.jpg') }}" alt="Restaurant Sunahara">
        </div>
        <div class="links d-flex justify-content-around">
            <a href="/reserve">Reserve</a>
            <a href="/courses">Menu</menu></a>
        </div>
    </div>
@endsection
