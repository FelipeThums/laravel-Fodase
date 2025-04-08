<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telas</title>
    <link rel="stylesheet"  href="{{asset('/css/int.css')}}">
</head>
<body>
    <header>
        <nav>
            <a href="{{route ('principal')}}">Sobre</a>
            <a href="{{route ('screen')}}">Telas</a>
            <a href="{{route ('vagas')}}">candidato</a>
            <a href="{{route ('SignIn')}}">Login</a>
            <a href="{{route ('candidato')}}">Empresa</a>
        </nav>
    </header>
<div>
    <img src="images/telas.png" draggable="false">
</div>
<div id="image-track" data-mouse-down-at="0" data-prev-percentage ="0">
    <img class="image" src="images/telas (1).jpeg" draggable="false">
    <img class="image" src="images/telas (2).jpeg" draggable="false">
    <img class="image" src="images/telas (3).jpeg" draggable="false">
    <img class="image" src="images/telas (4).jpeg" draggable="false">
    <img class="image" src="images/telas (5).jpeg" draggable="false">
    <img class="image" src="images/telas (6).jpeg" draggable="false">
    <img class="image" src="images/telas (7).jpeg" draggable="false">
    <img class="image" src="images/telas (8).jpeg" draggable="false">


    <script src="{{asset('/js/int.js')}}"></script>
</div>

    <div id="logo-container">
                <img src="images/logo.png" id="app-logo">
            </div>
            <div class="tempo">

    </div>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>