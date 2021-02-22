@extends('layout.app')
    @section('main')
         <h1>Dischi</h1>
         @foreach($database as $album)
         <div class="dischi">
            <img src="{{ $album['poster'] }}" alt="">
            <h3>{{ $album['title'] }}</h3>
            <h2>{{ $album['author'] }}</h2>
            <p>{{ $album['genre'] }}</p>
            <span>{{ $album['year'] }}</span>
         </div>
         @endforeach
    @endsection

