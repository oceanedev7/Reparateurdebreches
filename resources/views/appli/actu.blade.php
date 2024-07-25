@extends('layouts.vue')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  @section('title', 'Actualité')

    @section('content')
    <div class="flex items-center justify-center bg-bleu-fonce">
        <h1 class="font-bold text-5xl absolute text-white z-10">ACTUALITÉ</h1>
        <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/actu.jpg') }}" alt="">
    </div>
    @endsection
    
    

    @section('main')

    <a href="{{route('les-actus')}}" class="underline text-bleu-fonce"><i class="fa-solid fa-arrow-left underline mt-8 ml-8 text-bleu-fonce"></i> Retour à la page des actualités </a>
    
    <div class="w-full flex justify-center">
        <div class="flex flex-col text-justify p-24 space-y-20 max-w-6xl">
            <div class="space-y-14 ">
             
                <div class="text-bleu-fonce font-black text-4xl">{{ $actualite->titre}}</div>
                <hr class="border-t-2 border-bleu-fonce w-1/4"> 
                <div class="text-bleu-fonce text-lg flex flex-col items-center">
                  <img class="w-1/2 mb-4" src="{{ Storage::url($actualite->photo) }}" alt="">
                  <div class="w-full text-justify">
                    {{ $actualite->contenu }}
                  </div>
                </div>
                
                
                
        </div>
    </div>
    
    <button onclick="backToTop()" id="bouton" class="fixed bottom-4 right-4 z-50 text-gris-fonce text-3xl"><i class="fa-solid fa-circle-arrow-up"></i></button>
   
    @endsection 
    
    <script>
       
var bouton = document.getElementById("bouton");

function scroll() {
  if (document.documentElement.scrollTop > 50) {
    bouton.style.display = "block";
  } else {
    bouton.style.display = "none";
  }
}

function backToTop() {
  document.documentElement.scrollTop = 0; 
}
</script>
</body>
</html>