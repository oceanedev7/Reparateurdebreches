<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    <h1>Contact Information</h1>
    @if (isset($emails) && count($emails) > 0)
    @foreach ($emails as $contact)
        <div>
            <p><strong>Nom:</strong> {{ $contact['nom'] }}</p>
            <p><strong>Email:</strong> {{ $contact['email'] }}</p>
            <p><strong>Message:</strong> {{ $contact['message'] }}</p>
            <hr>
        </div>
    @endforeach
    @endif
</body>
</html>