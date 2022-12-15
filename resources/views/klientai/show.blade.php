<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Kliento duomenys</title>
</head>
<body>

    <h2>{{$client->id}}</h2>
    <h2>{{$client->im_kodas}}</h2>
    <h2>{{$client->klientas}}</h2>
    <h2>{{$client->adresas}}</h2>
    <h2>{{$client->miestas}}</h2>
    <h2>{{$client->pasto_kodas}}</h2>
    <h2>{{$client->telefonas}}</h2>
    <h2>{{$client->el_pastas}}</h2>

    <a href="{{route('klientai.index')}}">Grįšti į klientų sąrašą</a>
    
</body>
</html>