<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coneccta</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <!--header-->
    <header>
        <nav>
            <a href="{{route ('principal')}}">Sobre</a>
            <a href="{{route ('screen')}}">Telas</a>
            <a href="{{route ('vagas')}}">candidato</a>
            <a href="{{route ('SignIn')}}">Login</a>
            <a href="{{route ('candidato')}}">Empresa</a>
        </nav>
    </header>

    <!-- carrossel -->
    <div class="carrossel">
        <!--lista-->
        <div class="lista">
            <div class="item">
                <img src="images/fuji.png">
                <div class="conteudo">
                    <div class="titulo">Propósito do App</div>
                    <div class="descricao">
                        Nós criamos esse app pensando em facilitar a vida de quem procura emprego e de quem está contratando. Usando uma interface simples e intuitiva.
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/ui ai ui aiai.png">
                <div class="conteudo">
                    <div class="titulo">Funcionalidades</div>
                    <div class="descricao">
                        No nosso app, você pode criar um perfil, visualizar vagas disponíveis e se candidatar a elas. Além disso, você pode acompanhar o status da sua candidatura e receber notificações sobre novas oportunidades.
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/redes.png">
                <div class="conteudo">
                    <div class="titulo">Redes sociais</div>
                    <div class="descricao">
                        Conecte-se conosco: @coneccta_oficial no Instagram, LinkedIn e Twitter
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/aaaaaaiiiiiii aaaaaaaaaaiiiiiiiiiii.png">
                <div class="conteudo">
                    <div class="titulo">Missão da empresa</div>
                    <div class="descricao">
                        Nossa missão é ser referência em conexões humanizadas, onde o foco é o bem-estar e a felicidade de todos os envolvidos.
                    </div>
                </div>
            </div>
        </div>
        
        <!--thumbnail-->
        <div class="thumbnail">
            <div class="item">
                <img src="images/proposito.jpg">
                <div class="conteudo">
                    <div class="titulo">Propósito</div>
                </div>
            </div>
            <div class="item">
                <img src="images/informacoes.jpg">
                <div class="conteudo">
                    <div class="titulo">Seções Informativas</div>
                </div>
            </div>
            <div class="item">
                <img src="images/redes sociais.jpg">
                <div class="conteudo">
                    <div class="titulo">Redes Sociais</div>
                </div>
            </div>
            <div class="item">
                <img src="images/path.jpg">
                <div class="conteudo">
                    <div class="titulo">Missões</div>
                </div>
            </div>
        </div>
        <div id="logo-container">
            <img src="images/logo.png" id="app-logo">
        </div>
        
        <div class="tempo"></div>
    </div>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>