@extends('layouts.basic')

@section('title', 'Benvenuto | Comics')

@section('content')
    <main>
        <div class="jumbo">
        </div>
        <div class="bg_black">
            <div class="container">
                <h2>Current series</h2>

                <div class="comics">


                    @foreach ($comics as $item)
                        <div class="col">
                            <figure>
                                <a href="{{ route('comics.show', ['comic' => $item['id']]) }}">
                                    <img src="{{ $item->thumb }}" alt="thumb comic">
                                </a>

                            </figure>
                            <h5>{{ $item->series }}</h5>
                            <p>A partire da <span>{{ $item->price }} $</span></p>
                            <p>Categoria: <span id="type">{{ $item->type }}</span></p>

                            <div class="options">
                                <a href="">Edit</a>
                                <form action="{{ route('comics.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach



                </div>
                <div class="btn">
                    <a href="{{ route('comics.create') }}">Create Comic</a>
                </div>
            </div>
        </div>
        <div class="bg_blue">

            <div class="container info">
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </figure>
                    <p>Digital comics</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </figure>
                    <p>dc merchandise</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </figure>
                    <p>comic shop locator</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </figure>
                    <p>subscription</p>
                </div>
                <div class="infoContent">
                    <figure>
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </figure>
                    <p>dc power visa</p>
                </div>
            </div>
        </div>

    </main>
@endsection
