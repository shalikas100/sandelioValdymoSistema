<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Rodyti prekę</title>
</head>
<body>
<h2>Prekės informacija:</h2>

        <h5>Pavadinimas: {{$product->pavadinimas}}</h3>
        <h5>Kodas: {{$product->kodas}}</h2>
        <h5>Barkodas: {{$product->barkodas}}</h5>
        <h5>Likutis: {{$product->likutis}}</h5>
        <h5>Vnt. svoris: {{$product->svoris}}</h5>
        <h5>Vnt. dėžėje: {{$product->vnt_dezeje}}</h5>
        <h5>Gamintojas: {{$product->gamintojas}}</h5>
        <h5>Prekės tipas: {{$product->prekes_tipas}}</h5>
        <h5>Vieta sandėlyje: {{$product->vieta_sandelyje}}</h5>

        <a href="{{route('prekes.index')}}">Grįšti į prekių sąrašą</a>
    
</body>
</html>