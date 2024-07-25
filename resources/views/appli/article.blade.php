@extends('layouts.base')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@section('Articles')</title>
</head>

<body>
    <main>
        @section('content')
        <div class="flex items-center justify-center h-1/2 bg-bleu-fonce">
            <h1 class="font-bold text-6xl  text-white px-5">{{ $article->titre }}</h1>
            <img class="h-96 w-full object-cover opacity-50" src="{{ Storage::url('images/book.jpg') }}" alt="">
        </div>

        <article>
            <strong>
                <h1>{{ $article->date }}</h1>
            </strong>
            <br>
            <img src="{{ Storage::url($article->photo) }}">
            <p class="font-bold">{{ $article->description }}</p>
        </article>

        <br>
        <br>
        <div class="commentaires">
            <form action="{{ route('ajouterCommentaire', ['id' => $article->id]) }}" method="POST">
                @csrf
                <h2>Votre nom:</h2>
                <input name="nom" />
                <textarea name="commentaire" placeholder="Votre commentaire..."></textarea>
                <button class="gris">Ajouter</button>
            </form>

            <br>
            <br>
            @if (isset($commentaires) && count($commentaires) > 0)
                @foreach ($commentaires as $commentaire)
                    <div class="commentaire">
                        <p class="utilisateur">{{ $commentaire->nom }} | {{$commentaire->created_at}}</p>
                        <p class="commentaire-texte">{{ $commentaire->commentaire }}</p>
                    </div>
                @endforeach
            @endif
        </div>

        @endsection
    </main>
</body>

</html>