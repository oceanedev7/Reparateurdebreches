@extends('layouts.vue')
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
<h1 class="font-bold text-6xl absolute text-white  z-10">NOS ARTICLES</h1>
<img class="h-96 w-full object-cover opacity-50" src="{{ Storage::url('images/journal.jpg') }}" alt="">
</div>

<div class="grid grid-cols-3 justify-items-center  gap-5 pt-5 pb-5 pr-0 pl-0" >
        @foreach($articles as $article)
       {{-- <li> --}}
        <div class="A"> 
            {{-- {{ $article->titre }} --}}
            <a href="{{ route('appli.article', $article->id) }}">
            <img class="h-auto w-[320px]  " src="{{ Storage::url('images/journal.jpg') }}">
            {{-- <div class="bg-bleu w-[2px] "> --}}
            <div class="titre">
            <h3>{{ $article->titre }}</h3>
            </div>
            </a>
        {{-- </div> --}}
        </div> 
         
            
             @csrf
        {{-- </li>        --}}
        @endforeach
   </ul>

</body>
</html>


@endsection
    </main>
</body>
</html>
