@extends('layouts.base')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('Articles')</title>
</head>
<body>
    <main>
@section('content')
<div class="flex items-center justify-center h-1/2 bg-bleu-fonce">
<h1 class="font-bold text-6xl absolute text-white ">NOS ARTICLES</h1>
<img class="h-96 w-full object-cover opacity-50" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
</div>
<h3>oijcdhbjqsdjknfs</h3>

<ul>
        @foreach($articles as $article)
        <div class="grid grid-cols-3 gap-2">
            <div>
                <img class="h-auto max-w-lg rounded-lg" src="{{ Storage::url('images/header-home.jpg') }}">
            </div>
            </div>
            <strong>{{ $article->titre }}</strong>
             @csrf
                    
        @endforeach
    </ul>

</body>
</html>


@endsection
    </main>
</body>
</html>