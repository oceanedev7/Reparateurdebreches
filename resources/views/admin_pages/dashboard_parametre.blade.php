@extends('layouts.base_admin')

@section('title', 'Dashboard-Parametres')

@section('content')

<div class="max-w-5xl mx-auto my-14">
    <div class="flex flex-col justify-between items-end">
        <h2 class="font-bold text-6xl  text-bleu-fonce my-14 " style="font-size:80px; width:1020px;">
            PARAMETRES DU COMPTE</h2>


        <form class="max-w-md mx-auto" style="width:500px;" method="post" action="{{route('updateConfirmParametre')}}">
            @csrf
            <label for="nom" class="my-6 block mb-2 text-xl font-bold text-gray-900 dark:text-bleu-fonce">Nom</label>
            <input type="nom" id="nom" name="nom"
                class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                value="{{$parametre->nom}}" required />
            <label for="email"
                class=" my-6 block mb-2 text-xl font-bold text-gray-900 dark:text-bleu-fonce">Email</label>
            <input type="email" id="email" name="email"
                class="bg-white border-4 border-bleu text-bleu-fonce text-xl font-bold rounded-lg focus:ring-bleu focus:border-bleu block w-full p-2.5 dark:bg-white dark:border-bleu dark:placeholder-bleu-fonce dark:text-bleu-fonce dark:focus:ring-bleu dark:focus:border-bleu"
                value="{{$parametre->email}}" required />

            <div class="mb-5 flex items-end justify-end">
                <button type="submit"
                    class=" my-10 text-white bg-bleu-fonce hover:bg-bleu-clair focus:ring-4 focus:outline-none focus:ring-bleu  rounded-lg text-xl font-bold w-full sm:w-auto px-5 py-2.5 text-center dark:bg-bleu-fonce dark:hover:bg-bleu-fonce dark:focus:ring-bleu">Modifier</button>
            </div>
        </form>

    </div>
    <div>

        <a type="button" href="{{route('newPassword', $parametre->email)}}"
            class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Reset
            Mot de passe</a>
    </div>
</div>
@endsection