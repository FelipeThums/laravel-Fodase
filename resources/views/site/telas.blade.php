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
            <a href="">Info</a>
        </nav>
    </header>
<div>
    <img src="images/telas.png" draggable="false">
</div>
<div id="image-track" data-mouse-down-at="0" data-prev-percentage ="0">
    <img class="image" src="./images/img1.jpg" draggable="false">
    <img class="image" src="./images/img2.jpg" draggable="false">
    <img class="image" src="./images/img3.jpg" draggable="false">
    <img class="image" src="./images/img4.jpg" draggable="false">
    <img class="image" src="./images/img5.jpg" draggable="false">
    <img class="image" src="./images/img6.jpg" draggable="false">
    <img class="image" src="./images/img7.jpg" draggable="false">
    <img class="image" src="./images/img8.jpg" draggable="false">

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