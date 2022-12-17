<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redaguoti pardavimą</title>
</head>
<body>
    <h1>Pardavimo redagavimas</h1>

    <form method="POST" action="{{route('pardavimai.update', $sale)}}">

        @csrf

        <label for="kliento_id">Klientas</label>
        <input type="text" name="kliento_id" value="{{$sale->kliento_id}}">

        <label for="kodas">Kodas</label>
        <input type="text" name="kodas" value="{{$sale->kodas}}">

        <label for="kiekis">Kiekis</label>
        <input type="text" name="kiekis" value="{{$sale->kiekis}}">

        <button type="submit">Pakeisti</button>

    </form>    
    <a href="{{route('pardavimai.index')}}">Grįšti į pardavimus</a>

    
</body>
</html>