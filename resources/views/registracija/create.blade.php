<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/sandelioValdymoSistemaCSS/registracija.css')}}">

    <title>Registracija</title>
</head>
<body>
    <div class="container">
        <div class="registracija">
                <h1>Registracija</h1>
        </div>
        <div class="form">
            <form action="{{route('registracija.store')}}" method="POST">

            @csrf

                <input type="text" name="im_kodas" placeholder="Įm. kodas" value="{{old('im_kodas')}}">
                <input type="text" name="klientas" placeholder="Klientas" value="{{old('klientas')}}">
                
                <input type="text" name="prisijungimo_vardas" placeholder="Prisijungimo vardas" value="{{old('prisijungimo_vardas')}}">
                    <span style="color:red; font-size:12px">@error('prisijungimo_vardas'){{$message}}@enderror</span>

                <input type="text" name="adresas" placeholder="Adresas" value="{{old('adresas')}}">
                <input type="text" name="miestas" placeholder="Miestas" value="{{old('miestas')}}">
                <input type="text" name="pasto_kodas" placeholder="Pašto kodas" value="{{old('pasto_kodas')}}">
                <input type="phone" name="telefonas" placeholder="Telefono nr. +370..." value="{{old('telefonas')}}">

                <input type="email" name="el_pastas" placeholder="Elektroninis paštas" value="{{old('el_pastas')}}">
                    <span style="color:red; font-size:12px">@error('el_pastas'){{$message}}@enderror</span>

                <input type="password" name="slaptazodis" placeholder="Slaptažodis" >
                    <span style="color:red; font-size:12px; margin-top:3px;">@error('slaptazodis'){{$message}}@enderror</span>

                <input type="password" name="pakartoti_slaptazodi" placeholder="Pakartokite slaptažodį">
                    <span style="color:red; font-size:12px">@error('pakartoti_slaptazodi'){{$message}}@enderror</span>
                    <div class="buttons">
                        <button type="submit">Registruotis</button>
                        <button class="buton_link"><a href="{{route('registracija.index')}}">Grįžti</a></button>
                    </div>
            </form>
        </div>
        <div class="session_zinute">
            @if(Session::has('success'))
                <h5 style="color:green">{{Session::get('success')}}</h5>
                <style>
                    .container{
                        background:rgb(175, 233, 170);
                    }
                </style>
            @endif
            @if(Session::has('fail'))
            <h5>{{Session::get('fail')}}</h5>
                <style>
                    .container{
                        background:rgb(233, 170, 170);
                    }
                </style>
            @endif
        </div>
    </div>
            
    
</body>
</html>