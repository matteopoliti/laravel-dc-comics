@extends('layouts.basic')

@section('title', 'DC Comics | Edit Comic')

@section('content')
    <main>
        <div class="create">
            <h2 id="title_create">Inserisci le nuove informazioni del fumetto:</h2>
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="title">Titolo:</label><br>
                <input type="text" id="title" name="title" value="{{ old('title') ?? $comic->title }}"><br>

                <label for="description">Descrizione:</label><br>
                <textarea id="description" name="description" rows="4" cols="50"> {{ old('description') ?? $comic->description }}</textarea><br>

                <label for="thumb">URL dell'immagine di anteprima:</label><br>
                <input type="text" id="thumb" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}"><br>

                <label for="price">Prezzo:</label><br>
                <input type="number" id="price" name="price" step="0.01"
                    value="{{ old('price') ?? $comic->price }}"><br>

                <label for="series">Serie:</label><br>
                <input type="text" id="series" name="series" value="{{ old('series') ?? $comic->series }}"><br>

                <label for="sale_date">Data di vendita:</label><br>
                <input type="date" id="sale_date" name="sale_date"
                    value="{{ old('sale_date') ?? $comic->sale_date }}"><br>

                <label for="type">Tipo:</label><br>
                <input type="text" id="type" name="type" value="{{ old('type') ?? $comic->type }}"><br>

                <br>

                <button type="submit">Modifica fumetto</button>
            </form>

        </div>
    </main>
@endsection
