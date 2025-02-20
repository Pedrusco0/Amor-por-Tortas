
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - Amor por Comida</title>
    <link rel="stylesheet" type="text/css" href="perfil.css">
</head>
<body>
    <header>
        <nav>
            <span class="logo">Amor por Comida</span>
            <ul class="menu">
                <li><a>Home</a></li>
                <li><a>Receitas</a></li>
                <li><a>Novidades</a></li>
                <li><a>Melhor avaliadas</a></li>
            </ul>
            <a class="login" href="login/login.html">Login</a>
        </nav>
    </header>

    <main>
        <div class="perfil-container">
            <!-- banner -->
            <div class="perfil-banner">
                <img src="../../assets/banner.jpeg" alt="Banner do Perfil">
            </div>

            <!-- foto de perfil -->
            <div class="perfil-foto">
                <img src="../../assets/perfil.png" alt="Foto de Perfil">
            </div>
            <div class="perfil-info">
                <h1>Nome do usuario</h1>
                <input class="perfil-nome"></input>
                <br>
                <h2>User</h2>
                <input class="perfil-usuario" id="user"></input>
                <br>
                <h2>Bio</h2>
                <input class="perfil-bio"></input>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-copy">Copyright &lt;CODEFEE /&gt; 2025</p>
        <p class="footer-autor">Feito com muitas receitas e ❤ por Jack</p>
    </footer>
</body>
</html>