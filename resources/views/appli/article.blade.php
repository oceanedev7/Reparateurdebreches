@extends('layouts.base')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@section('Articles')</title>
</head>
<body>
    <main>
@section('content')
<div class="flex items-center justify-center h-1/2 bg-bleu-fonce">

        
  
<h1 class="font-bold text-6xl absolute text-white ">{{ $article->titre }}</h1>
<img class="h-96 w-full object-cover opacity-50" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
</div>

<article>

<strong><h1>{{ $article->date }}</h1></strong>
<br>

{{-- <p> {{ $article->titre }} </p> --}}
<br>
    <img  src="{{ Storage::url('images/header-home.jpg') }}">

    <p>{{ $article->description }}</p>
    
</article>


        {{-- <h2>Laisser un commentaire...</h2>

        <input type="text" class="gris"> --}}

       
<br>
<br>
<div class="commentaires">
    <form action="{{route('commentaire')}}" method="POST">
        @csrf
    <h2>Laisser un commentaire...</h2>
    <input name="nom"/>
    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea>
    <button class="gris">Ajouter</button>
 </form>

    
    <br>
    <br>
@if (isset($commentaires)&& count($commentaires)>0)
    @foreach ($commentaires as $commentaire) {
    <div class="commentaire">
        <p class="utilisateur">{{ $commentaire->nom }} | 15/08/2024 15:09</p>
        <p class="commentaire-texte">{{ $commentaire->commentaire }}</p>
    </div>
   
}




   

    @endforeach
    @endif
</div>


</body>
</html>


@endsection
    </main>
</body>
</html>