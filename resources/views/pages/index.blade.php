@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container text-center">
        @php $comicsChunks = array_chunk($comics, 6); @endphp
        @foreach ($comicsChunks as $chunk)
            <div class="row">
                @foreach ($chunk as $id => $comic)
                    <div class="col">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <a href="{{ route('comics.show', ['id' => $id]) }}">{{ $comic['title'] }}</a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection


<style lang="scss" scoped>
    img {
        width: 100%;
        overflow: hidden;
    }

</style>
