@extends('layouts.base')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@section('Articles')</title>
</head>
<body>
    <main>
@section('content')
<div class="flex items-center justify-center h-1/2 bg-bleu-fonce">
<h1 class="font-bold text-6xl absolute text-white ">TITRE ARTICLE</h1>
<img class="h-96 w-full object-cover opacity-50" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
</div>

<article>

<strong><h1>15/08/2024 15:09</h1></strong>
<br>

<p>Phasellus eu orci nec mi pellentesque sollicitudin non non leo. In nisi mi, consequat sed elit vel, consectetur fermentum libero. Cras a facilisis velit, ac finibus nisi. Sed ac interdum erat, sit amet tempus mi. Praesent eget libero commodo, maximus magna eget, fermentum risus. Suspendisse sit amet viverra libero. Quisque condimentum ultrices est, sit amet ornare nisi sodales in. Nullam molestie sem ante, id mattis justo pretium id. Morbi gravida libero in ornare viverra. Ut enim elit, consequat molestie tortor in, blandit fermentum lectus.
    Phasellus eu orci nec mi pellentesque sollicitudin non non leo. In nisi mi, consequat sed elit vel, consectetur fermentum libero. Cras a facilisis velit, ac finibus nisi. Sed ac interdum erat, sit amet tempus mi. </p>
<br>
    <img  src="{{ Storage::url('images/header-home.jpg') }}">

    <p>Phasellus eu orci nec mi pellentesque sollicitudin non non leo. In nisi mi, consequat sed elit vel, consectetur fermentum libero. Cras a facilisis velit, ac finibus nisi. Sed ac interdum erat, sit amet tempus mi. Praesent eget libero commodo, maximus magna eget, fermentum risus. Suspendisse sit amet viverra libero. Quisque condimentum ultrices est, sit amet ornare nisi sodales in. Nullam molestie sem ante, id mattis justo pretium id. Morbi gravida libero in ornare viverra. Ut enim elit, consequat molestie tortor in, blandit fermentum lectus.</p>
    
</article>

        {{-- <h2>Laisser un commentaire...</h2>

        <input type="text" class="gris">

        <div>
            <form class="form-container" action="action-articles.php?action=add" method="post" target="_self">
                <div class="leave-message">Laissez un commentaire !</div>
                <input class="user-text" type="text" placeholder="Nom d'utilisateur" name="utilisateur"/>
                <textarea class="comment-text" type="text" placeholder="Dites-nous ce que vous en pensez..." name="commentaire"> </textarea>
                <button class="partager"> Partager </bouton>
            </form>
</div> --}}
<br>
<br>
<section class="commentaires">
    <h2>Laisser un commentaire...</h2>
    <textarea placeholder="Votre commentaire..."></textarea>
    <button class="gris">Ajouter</button>
    <br>
    <br>
    <div class="commentaire">
        <p class="utilisateur">Utilisateur | 15/08/2024 15:09</p>
        <p class="commentaire-texte">Super !</p>
    </div>
    <div class="commentaire">
        <p class="utilisateur">Utilisateur | 15/08/2024 15:09</p>
        <p class="commentaire-text">Super !</p>
    </div>


   {{-- @foreach ($comments as $comment) { 
        
        <div id="comment-container">
    
            <i class="fa-solid fa-circle-user"></i>
    
            <div class="user-container">
                <div class="user-comment">
                    {{ $comment->user }}; ?> 
                </div>
    
                <div class="date-comment">
                     <{{ $comment->date }}; ?>
                </div>
             </div>
    
             {{ $comment->comments }}
    
        </div>
    }

    @endforeach --}}

</section>


</body>
</html>


@endsection
    </main>
</body>
</html>