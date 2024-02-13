@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container text-center">
        @php $comicsChunks = array_chunk($comics, 6); @endphp
        @foreach ($comicsChunks as $chunk)
            <div class="row">
                @foreach ($chunk as $comic)
                    <div class="col">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h5>{{ $comic['title'] }}</h5>
                    </div>
                @endforeach
            </div>
        @endforeach
  </div>
@endsection
