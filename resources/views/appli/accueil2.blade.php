@extends('layouts.base')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('Accueil')</title>
</head>
<body>
    <main>
@section('content')
<img class="h-4/5 w-full object-cover" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
@endsection
    </main>
</body>
</html>
