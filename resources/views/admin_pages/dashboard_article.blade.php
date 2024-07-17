@extends('layouts.base_admin')

@section('title', 'Dashboard-Gérer les articles')

@section('content')

<div class="max-w-5xl mx-auto my-14">
    <div class="flex flex-col justify-between items-center">
        <h2 class="font-bold text-center  text-bleu-fonce my-14 " style="font-size:50px; width:1020px;">
            GESTION DES ACTUALITES</h2>


        <form class="max-w-md mx-auto" style="width:500px;">

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar"></label>
                <input
                    class="block w-full text-xl font-bold text-bleu-fonce  border-bleu-fonce rounded-lg cursor-pointer bg-white dark:text-bleu-fonce focus:outline-none dark:bg-white dark:border-gray-600 dark:placeholder-bleu-fonce"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                <input type="email" id="email"
                    class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                    placeholder="Titre" required />
            </div>
            <div class="">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                <textarea id="message" rows="8"
                    class="block p-2.5 w-full text-xl font-bold text-bleu-fonce bg-white rounded-lg border-4 border-bleu focus:ring-bleu focus:border-bleu dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                    placeholder="Description"></textarea>
            </div>
            <div class="mb-5 flex items-end justify-end">
                <button type="submit"
                    class=" my-10 text-white bg-bleu-fonce hover:bg-bleu-clair focus:ring-4 focus:outline-none focus:ring-bleu  rounded-lg text-xl font-bold w-full sm:w-auto px-5 py-2.5 text-center dark:bg-bleu-fonce dark:hover:bg-bleu-fonce dark:focus:ring-bleu">Ajouter</button>
            </div>
        </form>

    </div>
</div>

@endsection