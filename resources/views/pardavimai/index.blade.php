<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Pardavimai</title>
</head>
<body>
    <h1>Pardavimai</h1>
    <h4><a href="{{route('pardavimai.create')}}">Naujas pardavimas</a></h4>
    <table>
        <tr>
            <th>Pardavimo numeris</th>
            <th>Klientas</th>
            <th>Kodas</th>
            <th>Kiekis</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($sales as $sale)
        <tr>
            <td>{{$sale -> id}}</td>
            <td>{{$sale -> kliento_id}}</td>
            <td>{{$sale -> kodas}}</td>
            <td>{{$sale -> kiekis}}</td>
            <td><a href="{{route('pardavimai.show', $sale)}}">Peržiūrėti</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>