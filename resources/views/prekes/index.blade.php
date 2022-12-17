<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Prekių sąrašas</title>
</head>
<body>
    <h1>Prekių sąrašas</h1>
    <h4><a href="{{route('prekes.create')}}">Sukurti naują prekę</a></h4>
    <table>
        <tr>
            <th>Kodas</th>
            <th>Barkodas</th>
            <th>Pavadinimas</th>
            <th>Likutis</th>
            <th>Svoris</th>
            <th>Vnt. dėžėje</th>
            <th>Gamintojas</th>
            <th>Prekės tipas</th>
            <th>Vieta sandėlyje</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{$product -> kodas}}</td>
                <td>{{$product -> barkodas}}</td>
                <td>{{$product -> pavadinimas}}</td>
                <td>{{$product -> likutis}}</td>
                <td>{{$product -> svoris}}</td>
                <td>{{$product -> vnt_dezeje}}</td>
                <td>{{$product -> gamintojas}}</td>
                <td>{{$product -> prekes_tipas}}</td>
                <td>{{$product -> vieta_sandelyje}}</td>
                <td>
                <form method="POST" action="{{route('prekes.destroy', $product)}}">
                    @csrf
                    <button  onclick="return confirm('Tikrai norite ištirnti šią prekę?')" type="submit">Ištrinti</button>
                </form>
                <a href="{{route('prekes.edit', $product)}}">Redaguoti</a>
                <a href="{{route('prekes.show', $product)}}">Informacija</a>
                </td>
            </td>
            </tr>
        @endforeach
    </table>
</body>
</html>