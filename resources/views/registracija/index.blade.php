<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/sandelioValdymoSistemaCSS/login.css')}}">

    <title>Prisijungimas</title>
</head>
<body>
<div class="container-form">
        <div class="pavadinimas">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz-M6PYxGPBdq06kHb9NGy8s7ttubE1hXe5Q&usqp=CAU" alt="logo">
        </div>
        <div class="form">
            <form method="" action="index.php">            
                    <label for="name">Vartotojo vardas</label>
                    <input type="text" name="name">              
                    <label for="password">Slaptažodis</label>
                    <input type="password" name="password">             
                    <button type="submit" name="login">Prisijungti</button>
            </form>
            <div class="neregistruotas">
                <a href="neregistruotas_vartotojas.php">Neregistruotas vartotojas</a>
            </div>
            <div class="registracija">
                <a href="{{route('registracija.create')}}">Registracija</a>
            </div>
        </div>
    </div>
</body>
</html>