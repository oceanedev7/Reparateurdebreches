@extends('layouts.base_admin')

@section('title', 'Dashboard-Gérer les évenements')

@section('content')
<div class="max-w-5xl mx-auto my-14">
    <div class="flex flex-col justify-between items-center">
        <h2 class="font-bold text-center  text-bleu-fonce my-14 " style="font-size:50px; width:1020px;">
            GESTION DES EVENEMENTS</h2>
        <form class="max-w-md mx-auto" style="width:500px;" method="post" action="{{route('newEvenement')}}">
            @csrf

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo"></label>
            <input
                class="block w-full text-xl font-bold text-bleu-fonce  border-bleu-fonce rounded-lg cursor-pointer bg-white dark:text-bleu-fonce focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-bleu-fonce"
                aria-describedby="user_avatar_help" id="photo" name="photo" type="file">


            <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <input type="titre" id="titre" name="titre"
                class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                placeholder="Titre" required />


            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <textarea id="description" name="description" rows="8"
                class="block p-2.5 w-full text-xl font-bold text-bleu-fonce bg-white rounded-lg border-4 border-bleu focus:ring-bleu focus:border-bleu dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                placeholder="Description"></textarea>
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <input type="date" id="date" name="date"
                class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                placeholder="Date" required />
            <label for="lieu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <input type="lieu" id="lieu" name="lieu"
                class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                placeholder="Lieu" required />

            <div class="mb-5 flex items-end justify-end">
                <button type="submit"
                    class=" my-10 text-white bg-bleu-fonce hover:bg-bleu-clair focus:ring-4 focus:outline-none focus:ring-bleu  rounded-lg text-xl font-bold w-full sm:w-auto px-5 py-2.5 text-center dark:bg-bleu-fonce dark:hover:bg-bleu-fonce dark:focus:ring-bleu">Ajouter</button>
            </div>
        </form>
    </div>
    <div class="flex flex-col justify-between items-center">
        @foreach ($evenements as $evenement)
            <div
                class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
                <a href="#">
                    <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                        src="{{ Storage::url('Images/' . $evenement->photo) }}" alt="photo evenement" />

                    <div class="p-5 bg-bleu-fonce">

                        <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{$evenement->titre}}
                        </h5>
                        <p class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">{{$evenement->date}}
                        </p>
                        <p class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">{{$evenement->lieu}}
                        </p>
                    </div>
                </a>

            </div>
            <div>
                <a type="button" href="{{route('updateEvenement', $evenement->id)}}"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Modifier</a>
                <a type="button" href="{{route('deleteEvenement', $evenement->id)}}"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Supprimer</a>
            </div>
        @endforeach
    </div>
</div>

@endsection