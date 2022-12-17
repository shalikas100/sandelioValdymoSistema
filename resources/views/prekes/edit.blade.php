<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Redaguoti prekę</title>
</head>
<body>
<h1>Redaguoti prekės duomenis</h1>
    <form method="POST" action="{{route('prekes.update',$product)}}">

            @csrf

            <label for="kodas">Kodas</label>
            <input type="text" name="kodas" value="{{$product->kodas}}">

            <label for="barkodas">Barkodas</label>
            <input type="text" name="barkodas" value="{{$product->barkodas}}">

            <label for="pavadinimas">Pavadinimas</label>
            <input type="text" name="pavadinimas" value="{{$product->pavadinimas}}">
      
            <label for="likutis">Likutis</label>
            <input type="text" name="likutis" value="{{$product->likutis}}">

            <label for="svoris">Svoris</label>
            <input type="text" name="svoris" value="{{$product->svoris}}">

            <label for="vnt_dezeje">Vnt. dėžėje</label>
            <input type="text" name="vnt_dezeje" value="{{$product->vnt_dezeje}}">

            <label for="gamintojas">Gamintojas</label>
            <input type="text" name="gamintojas" value="{{$product->gamintojas}}">

            <label for="prekes_tipas">Prekės tipas</label>
            <input type="text" name="prekes_tipas" value="{{$product->prekes_tipas}}">
            
            <label for="vieta_sandelyje">Vieta sandėlyje</label>
            <input type="text" name="vieta_sandelyje" value="{{$product->vieta_sandelyje}}">

            <button type="submit">Įrašyti</button>
    </form>
    <a href="{{route('prekes.index')}}">Grįšti į prekių sąrašą</a>
    
    
</body>
</html>