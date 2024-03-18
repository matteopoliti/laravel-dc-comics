@extends('layouts.basic')

@section('title', 'Benvenuto | Show Comic')

@section('content')
    <main>
        <div class="jumbo">
        </div>
        <div class="bg_white">

            <div class="bg_blue"></div>
            <div class="container">
                <figure>
                    <img src="{{ $comics->thumb }}" alt="" class="thumb">
                </figure>

                <div class="comics_show">
                    <div>
                        <h3>{{ $comics->title }}</h3>
                        <p>{{ $comics->description }}</p>
                    </div>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                    </figure>
                </div>

            </div>
        </div>

    </main>
@endsection
