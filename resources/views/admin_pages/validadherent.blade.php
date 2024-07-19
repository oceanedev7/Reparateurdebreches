<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>
<body>
    
    <h1 class="text-center font-black text-xl"> VALIDER UN ADHÉRENT </h1>

    <table class="border-collapse border border-slate-400">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Genre</th>
                <th>Date de naissance</th>
                <th>Adresse e-mail</th>
                <th>Numéro de téléphone</th>
                <th>Adresse postale</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th>Pays</th>
                <th>Valider</th>
                <th>Refuser</th>
            </tr>
        </thead>
        <tbody> 
            {{-- @foreach ( as ) --}}
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>  
                <td>  </td> 
                <td> </td>
                <td> </td> 
                <td> </td> 
                <td> </td> 
                <td> </td> 
                <td> </td> 
                <td class="text-green-600"><a href=""><i class="fa-solid fa-square-check"></i></a></td>
                <td class="text-red-600"><a href=""><i class="fa-solid fa-square-xmark"></i> </a></td>
            </tr> 
            {{-- @endforeach --}}
        </tbody>
    </table>


    
</body>
</html>