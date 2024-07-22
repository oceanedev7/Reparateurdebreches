@extends('layouts.base_admin')

@section('title', 'Dashboard-Gérer les articles')

@section('content')

<div class="max-w-5xl mx-auto my-14">
    <div class="flex flex-col justify-between items-center">
        <h2 class="font-bold text-center  text-bleu-fonce my-14 " style="font-size:50px; width:1020px;">
            GESTION DES ACTUALITES</h2>


        <form enctype="multipart/form-data" class="max-w-md mx-auto" style="width:500px;" method="post" action="{{route('newActualite')}}">
            @csrf

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo"></label>
            <input
                class="block w-full text-xl font-bold text-bleu-fonce  border-bleu-fonce rounded-lg cursor-pointer bg-white dark:text-bleu-fonce focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-bleu-fonce"
                aria-describedby="user_avatar_help" id="photo" name="photo" type="file" accept="image/*"/>


            <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <input type="text" id="titre" name="titre"
                class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                placeholder="Titre" required />


            <label for="contenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <textarea id="contenu" name="contenu" rows="8"
                class="block p-2.5 w-full text-xl font-bold text-bleu-fonce bg-white rounded-lg border-4 border-bleu focus:ring-bleu focus:border-bleu dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                placeholder="Description"></textarea>

            <div class="mb-5 flex items-end justify-end">
                <button type="submit"
                    class=" my-10 text-white bg-bleu-fonce hover:bg-bleu-clair focus:ring-4 focus:outline-none focus:ring-bleu  rounded-lg text-xl font-bold w-full sm:w-auto px-5 py-2.5 text-center dark:bg-bleu-fonce dark:hover:bg-bleu-fonce dark:focus:ring-bleu">Ajouter</button>
            </div>
        </form>

    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($actualites as $actualite)
            <div class="bg-white rounded-lg">
                <a href="#">
                    <img class="rounded-t-lg w-full object-cover" style="height:200px;" src="{{ Storage::url($actualite->photo) }}" alt="photo actualite" />
                    
                    <div class="p-5 bg-bleu-fonce">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-white">
                            {{ $actualite->titre }}
                        </h5>
                    </div>
                </a>
    
                <div class="flex justify-center gap-2 p-4 bg-white border-t border-gray-200">
                    <a type="button" href="{{ route('updateActualite', $actualite->id) }}"
                        class="text-white bg-bleu-fonce font-medium rounded-lg text-sm px-4 py-2.5 text-center">Modifier</a>
                    <a type="button" href="{{ route('deleteActualite', $actualite->id) }}"
                        class="text-white bg-bleu-fonce font-medium rounded-lg text-sm px-4 py-2.5 text-center">Supprimer</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection