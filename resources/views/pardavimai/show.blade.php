<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Perziureti pardavima</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>Peržiūrėti pardavimą</h1>     
        </div>
        <div class="pardavimas">
            <h3>Pardavimo nr.: {{$sale -> id}}</h3>
            <h3>Klientas: {{$sale -> kliento_id}}</h3>
            <div class="table">
                <table>
                    <tr>
                        <th>Eil. nr.</th>
                        <th>Kodas</th>
                        <th>Pavadinimas</th>
                        <th>Kiekis</th>
                        <th>Svoris, vnt.</th>
                        <th>Sukurta</th>
                        <th>Redaguota</th>
                        <th>Redagavimas</th>

                    </tr>
                    <tr>
                        <td></td>
                        <td>{{$sale -> kodas}}</td>
                        <td></td>
                        <td>{{$sale -> kiekis}}</td>
                        <td></td>
                        <td>{{$sale -> created_at}}</td>
                        <td>{{$sale -> updated_at}}</td>
                        <td><a href="{{route('pardavimai.edit', $sale)}}">Keisti</a></td>
                    </tr>
                </table>
            </div>
            <a href="{{route('pardavimai.index')}}">Grįšti į pardavimus</a>
        </div>
    </div>
</body>
</html>