@extends('layouts.base_admin')

@section('title', 'Dashboard-Gérer les articles-Mise à jour')

@section('content')
<div class="max-w-5xl mx-auto my-14">
    <div class="flex flex-col justify-between items-center">
        <h2 class="font-bold text-center  text-bleu-fonce my-14 " style="font-size:50px; width:1020px;">
            MISE A JOUR</h2>



        <form class="max-w-md mx-auto" style="width:500px;" method="post"
            action="{{route('updateConfirmArticle', $article->id)}}">
            @csrf
            <img class="rounded-2 w-full object-contain" style="height:200px;"
                src="{{ Storage::url('Images/' . $article->photo) }}" alt="photo article" />
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo"></label>
            <input
                class="block w-full text-xl font-bold text-bleu-fonce  border-bleu-fonce rounded-lg cursor-pointer bg-white dark:text-bleu-fonce focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-bleu-fonce"
                aria-describedby="user_avatar_help" id="photo" name="photo" type="file"
                placeholder="{{$article->photo}}" required>


            <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <input type="titre" id="titre" name="titre"
                class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                value="{{$article->titre}}" required />


            <label for="contenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
            <textarea id="contenu" name="contenu" rows="8"
                class="block p-2.5 w-full text-xl font-bold text-bleu-fonce bg-white rounded-lg border-4 border-bleu focus:ring-bleu focus:border-bleu dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                placeholder="{{$article->contenu}}" required></textarea>

            <div class="mb-5 flex items-end justify-end">
                <button type="submit"
                    class=" my-10 text-white bg-bleu-fonce hover:bg-bleu-clair focus:ring-4 focus:outline-none focus:ring-bleu  rounded-lg text-xl font-bold w-full sm:w-auto px-5 py-2.5 text-center dark:bg-bleu-fonce dark:hover:bg-bleu-fonce dark:focus:ring-bleu">Ajouter</button>
            </div>
        </form>
        <div>

            <a type="button" href="{{route('dashboard_article')}}"
                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Retour</a>
        </div>
    </div>
</div>
@endsection
