@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>

    @section('title', 'Agenda')


    @section('content')
<div class="flex items-center justify-center bg-bleu-fonce">
    <h1 class="font-bold text-5xl absolute text-white z-10">AGENDA</h1>
    <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/evenement.jpg') }}" alt="">
</div>
@endsection
    
@section('main')


<a href="{{route('accueil')}}" class="underline text-bleu-fonce"><i class="fa-solid fa-arrow-left underline mt-8 ml-8 text-bleu-fonce"></i> Retour à la page d'accueil </a>


<div class="grid grid-cols-3 gap-12 p-20 justify-center">
    @foreach ($evenements as $evenement)
    <a href="{{route('evenement', $evenement->id)}}" class="bg-bleu-fonce rounded-lg h-60 w-80 relative overflow-hidden">
        <img class="w-full rounded-lg object-cover h-full opacity-40" src="{{ Storage::url($evenement->photo) }}" alt="">
        <div class="relative bottom-44 left-4 mt-20 flex flex-col z-10">
            <div class="text-white font-black text-xl ml-6 mt-2"> {{$evenement->titre}} </div>
            <div class="text-white font-bold ml-6 text-xl h-mx-12 truncate">{{$evenement->date}} </div>
        </div>
        <div class="overlay"></div>
    </a>
    @endforeach
</div>



@endsection
</main>
</body>
</html>
