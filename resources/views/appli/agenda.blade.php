@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('Agenda')</title>
</head>
<body>



    @section('content')
<div class="flex items-center justify-center bg-bleu-fonce">
    <h1 class="font-bold text-5xl absolute text-white z-10">AGENDA</h1>
    <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/evenement.jpg') }}" alt="">
</div>
@endsection
    
@section('main')

<div class="grid grid-cols-3 gap-12 p-20 justify-center">
    <a href="{{route('evenement')}}" class="bg-bleu-fonce rounded-lg h-60 w-80 relative overflow-hidden">
        <img class="w-full rounded-lg object-cover h-full opacity-40" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
        <div class="relative bottom-44 left-4 mt-20 flex flex-col z-10">
            <div class="text-white font-black text-2xl ml-6 mt-2"> TITRE </div>
            <div class="text-white font-bold ml-6 text-2xl h-mx-12 truncate">12/08/2024 </div>
        </div>
        <div class="overlay"></div>
    </a>
</div>



@endsection
</main>
</body>
</html>