@extends('layouts.base_admin')

@section('title', 'Dashboard-Gérer les articles')

@section('content')

<div class="p-5 text-center ">

    <h5 class="mb-2   text-6xl font-bold tracking-wide " style="font-size: 35px; color:#2563EB" >
        GERER LES ARTICLES</h5>
</div>

{{-- @if (session('status'))
<div class="alert alert-success">
    ({session('status')})
</div>
    @endif

    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">
                ({$error})
            </li>
        @endforeach
    </ul> --}}


<form method="POST" action="{{route('newArticle')}}" enctype="multipart/form-data" class="max-w-sm mx-auto" style="width:500px;" >
    @csrf
    <div class="flex justify-center mb-9 pr-1 ">
        <input id="photo" name="photo" type="file" class="block w-15 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >
   </div>
    <div>
        <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
        <input type="text" id="titre" name="titre" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" accept="image/*">
    </div>

    <div class="mb-5">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></textarea>
    </div>
    <div class="flex justify-center mb-5 pr-1">

        <button  type="submit" class="  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>

    </div>

</form>


<div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-5 justify-items-center ">
   @if (isset($articles)&& count($articles)>0)
    @foreach ($articles as $article)
<div>
    <h5 class="text-center text-lg">{{$article->titre}}</h5>
    <img class="h-40 max-w-full rounded-lg" src="{{ Storage::url($article->photo) }}" alt="">
    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 mr-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">modifier</a>
    <a href="{{route ('deleteArticle', $article->id) }}" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-1 mr-1 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">supprimer</a>
</div>

</div>
@endforeach
@endif
@endsection
