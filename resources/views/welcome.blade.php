@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <div class="content">
        <img src="/img/burger.jpg" alt="Picture of pizza" id="main-img">
        <div class="title m-b-md">
            Recipe Book
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/recipes/create">Add a new recipe</a>
        <a href="/recipes/addmeasurement">Add a new measurement</a>


    </div>
</div>
@endsection
