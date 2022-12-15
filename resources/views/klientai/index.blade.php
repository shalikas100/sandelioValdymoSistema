<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Klientai</title>
</head>
<body>
    <h1>Klientai</h1>
    <a href="{{route('klientai.create')}}">Sukurti naują klientą</a>
    <table>
        <tr>
            <th>Įmonės kodas</th>
            <th>Klientas</th>
            <th>Adresas</th>
            <th>Miestas</th>
            <th>Pašto kodas</th>
            <th>Tel. numeris</th>
            <th>El. paštas</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{$client -> im_kodas}}</td>
            <td><a href="{{route('klientai.show', $client)}}">{{$client->klientas}}</a></td>
            <td>{{$client -> adresas}}</td>
            <td>{{$client -> miestas}}</td>
            <td>{{$client -> pasto_kodas}}</td>
            <td>{{$client -> telefonas}}</td>
            <td>{{$client -> el_pastas}}</td>
            <td>
                <form method="POST" action="{{route('klientai.destroy', $client)}}">
                    @csrf
                    <button type="submit">Ištrinti</button>
                </form>
                <a href="{{route('klientai.edit', $client)}}">Redaguoti</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>