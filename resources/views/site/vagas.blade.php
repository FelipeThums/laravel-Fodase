<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coneccta</title>
    <link rel="stylesheet" href="{{asset('/css/vagas.css')}}">
</head>
<body>
    <!--header-->
    <header>
        <nav>
            <a href="{{route ('principal')}}">Sobre</a>
            <a href="{{route ('screen')}}">Telas</a>
            <a href="{{route ('vagas')}}">candidato</a>
            <a href="">Info</a>
        </nav>
    </header>

    <!--Container-->
    <div class="container">
        <!-- carrossel -->
        <div class="carrossel">
            <!--lista-->
            <div class="lista">
                <div class="item active">
                    <img src="images/fuji.png">
                    <div class="conteudo">
                        <div class="titulo" id="vaga-titulo">Bem-vindo Candidato!</div>
                        <div class="descricao" id="vaga-descricao">
                            Aqui terá acesso a grandes oportunidades!
                        </div>
                        <!-- Lista de vagas -->
                        <div class="vagas-container">
                            <div class="vaga-linha">
                                <div class="vaga-item" onclick="mostrarVaga(1)">
                                    <div class="vaga-conteudo">
                                        <h3>Vaga 1</h3>
                                        <p>Desenvolvedor Front-end</p>
                                    </div>
                                    <div class="vaga-seta">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="vaga-item" onclick="mostrarVaga(2)">
                                    <div class="vaga-conteudo">
                                        <h3>Vaga 2</h3>
                                        <p>Desenvolvedor Back-end</p>
                                    </div>
                                    <div class="vaga-seta">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="vaga-item" onclick="mostrarVaga(3)">
                                    <div class="vaga-conteudo">
                                        <h3>Vaga 3</h3>
                                        <p>UX/UI Designer</p>
                                    </div>
                                    <div class="vaga-seta">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="vaga-linha">
                                <div class="vaga-item" onclick="mostrarVaga(4)">
                                    <div class="vaga-conteudo">
                                        <h3>Vaga 4</h3>
                                        <p>Analista de Dados</p>
                                    </div>
                                    <div class="vaga-seta">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="vaga-item" onclick="mostrarVaga(5)">
                                    <div class="vaga-conteudo">
                                        <h3>Vaga 5</h3>
                                        <p>Gerente de Projetos</p>
                                    </div>
                                    <div class="vaga-seta">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="vaga-item" onclick="mostrarVaga(6)">
                                    <div class="vaga-conteudo">
                                        <h3>Vaga 6</h3>
                                        <p>Especialista em Marketing</p>
                                    </div>
                                    <div class="vaga-seta">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Outros itens do carrossel... -->
            </div>
        </div>
        
        <!--thumbnail-->
        <div class="thumbnail">
            <!-- Itens do thumbnail... -->
        </div>
        
        <div id="logo-container">
            <img src="images/logo.png" id="app-logo">
        </div>
    </div>

    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>