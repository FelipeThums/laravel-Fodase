<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coneccta</title>
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
   
</head>
<body>
    <div id="logo-container">
        <img src="images/logo.png" id="app-logo">
    </div>
    <img src="images/loginimg.png" alt="Background" class="background-image">
    <header>
        <nav>
            <a href="{{route ('principal')}}">Sobre</a>
            <a href="{{route ('screen')}}">Telas</a>
            <a href="{{route ('vagas')}}">candidato</a>
            <a href="{{route ('SignIn')}}">Login</a>
            <a href="{{route ('candidato')}}">Empresa</a>
            
        </nav>
    </header>

    <div class="login-box">
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Email" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Senha" autocomplete="off" required>
        </div>
        <div class="forgot">
            <section>
                <input type="checkbox" id="check" class="custom-checkbox">
                <label id="remember-me" for="check">Lembrar de mim</label>
            </section>
            <section>
                <a href="#">Esqueci minha senha</a>
            </section>
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Inscreva-se</label>
        </div>
        <div class="sign-up-link">
            <p>Não tem uma conta? <a href="#">Crie uma conta</a></p>
        </div>
    </div>
    
    
</body>
</html>