@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>

  @section('title', 'Évènement')

    @section('content')
    <div class="flex items-center justify-center bg-bleu-fonce">
        <h1 class="font-bold text-5xl absolute text-white z-10">ÉVÈNEMENT</h1>
        <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/evenement.jpg') }}" alt="">
    </div>
    @endsection

    
        @section('main')
        <a href="{{route('agenda')}}" class="underline text-bleu-fonce"><i class="fa-solid fa-arrow-left underline mt-8 ml-8 text-bleu-fonce"></i> Retour à l'agenda </a>

        <div class="w-full flex justify-center">
            <div class="flex flex-col text-justify p-24 space-y-18 max-w-6xl">
                <div class="space-y-14 text-center">
                    <div class="text-bleu-fonce font-black text-4xl">{{$evenement->titre}}</div>
                    <div class="flex flex-row text-xl font-bold space-x-12 justify-center">
                    <div> Date : {{$evenement->date}}</div> 
                    <div> Lieu : {{$evenement->lieu}} </div>
                    </div>
                    <div class="text-bleu-fonce text-lg text-justify">
                      {{$evenement->description}}
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