<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Naujas pardavimas</title>
</head>
<body>
    <h1>Naujas pardavimas</h1>

    <form method="POST" action="{{route('pardavimai.store')}}">
        
            @csrf

            <label for="kliento_id">Klientas</label>
            <input type="text" name="kliento_id">

            <label for="kodas">Kodas</label>
            <input type="text" name="kodas">
      
            <label for="kiekis">Kiekis</label>
            <input type="text" name="kiekis">

            <button type="submit">Parduoti</button>
    </form>
    <a href="{{route('pardavimai.index')}}">Grįšti į pardavimus</a>
    
</body>
</html>