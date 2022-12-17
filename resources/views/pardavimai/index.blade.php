<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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