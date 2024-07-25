@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    @section('title', 'Les actualités')

    @section('content')
    <div class="flex items-center justify-center bg-bleu-fonce">
        <h1 class="font-bold text-5xl absolute text-white z-10">ACTUALITÉS</h1>
        <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/actus.jpg') }}" alt="">
    </div>
    @endsection
    

@section('main')
<a href="{{route('accueil')}}" class="underline text-bleu-fonce"><i class="fa-solid fa-arrow-left underline mt-8 ml-8 text-bleu-fonce"></i> Retour à la page d'accueil </a>

<div class="grid grid-cols-3 gap-12 p-20 justify-center ">

           @foreach ($actualites as $actualite)

           <a href="{{ route('actu', $actualite->id) }}" class="bg-bleu-fonce rounded-lg h-80 w-80 flex flex-col">
            <img class="w-full rounded-t-lg object-cover h-3/5" src="{{ Storage::url($actualite->photo) }}">
            <div class="font-black text-center text-lg mt-2 text-white mx-4 px-2 flex-1 flex items-center justify-center">
                {{ $actualite->titre }}
            </div>
        </a>
@endforeach
</div>



@endsection





</body>
</html>