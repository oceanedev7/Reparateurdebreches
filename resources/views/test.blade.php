<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Détails de l'inscription</h1>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->nom}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->prenom}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->genre}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->date_naissance}} </td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->email}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->numero_telephone}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->adresse_postale}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->ville}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->code_postal}}</td>
    <td class="border border-gris-clair px-4 py-2">{{$inscription->pays}}</td>
</body>
</html>