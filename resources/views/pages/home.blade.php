@extends('layouts.layout')

@section('title', 'DC Comics | Home')

@section('content')

<main>
    <div class="container-1">

        <div class="current-series">CURRENT SERIES</div>

        @foreach ( $comics as $element)
        <div class="comic">
            <img src="{{ $element['thumb'] }}" alt="{{ $element['title'] }}">
            <div class="title">{{ $element['title'] }}</div>
        </div>
        @endforeach


        <a href="#">Load More</a>
    </div>
</main>

@endsection
