@extends('layouts.main')

@section('main-content')
    <ul class="card-list container">
        @foreach ($comics as $comic)
            <li class="card">
                <div class="cover">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <div class="text">
                    <h4>
                        {{ $comic['series'] }}
                    </h4>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="button-container">
        <a href="" class="button">Load More</a>
    </div>
@endsection