<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Redaguoti klientą</title>
</head>
<body>

<h1>Keičiamo kliento ID: {{$client -> id}}</h1>

<form method="POST" action="{{route('klientai.update', $client)}}">

        @csrf

        <label for="im_kodas">Įmonės kodas</label>
        <input type="text" name="im_kodas" value="{{$client->im_kodas}}">

        <label for="klientas">Klientas</label>
        <input type="text" name="klientas" value="{{$client->klientas}}">

        <label for="adresas">Adresas</label>
        <input type="text" name="adresas" value="{{$client->adresas}}">
  
        <label for="miestas">Miestas</label>
        <input type="text" name="miestas" value="{{$client->miestas}}">

        <label for="pasto_kodas">Pašto kodas</label>
        <input type="text" name="pasto_kodas" value="{{$client->pasto_kodas}}">

        <label for="telefonas">Tel. Nr.</label>
        <input type="text" name="telefonas" value="{{$client->telefonas}}">

        <label for="el_pastas">El. paštas</label>
        <input type="text" name="el_pastas" value="{{$client->el_pastas}}">

        <button type="submit">Pakeisti</button>

</form>
<a href="{{route('klientai.index')}}">Grįšti į klientų sąrašą</a>
    
</body>
</html>