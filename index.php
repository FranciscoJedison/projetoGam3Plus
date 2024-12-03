<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
   // Se não estiver logado, redirecionar para o login
   header("Location: login.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamePlus+</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    .search-container h3{
        color: white;
        padding: 2px;
    }
    </style>
</head>
<body>

    <!--Parte inicial com a prompt de pesquisa-->
        <div class="search-container">
            <form id="searchForm">
                <input type="text" id="search-bar" placeholder="Digite sua pesquisa..." required>
                <button type="submit">Pesquisar</button>
                <a href="login.php"><button type="button" class="login-btn">Login</button></a>
                <h3 class="msg-lgn">Bem-vindo, <?php echo $_SESSION['nome']; ?>! </h3>
                <a href="logout.php"><button type="button" class="logout-btn">Sair</button></a>


            </form>
            <div id="result">
            </div>
        </div>
    
    <!--Menu-->

    <header>
        <nav class="navbar">
            <div class="logo">GamePlus+</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="produto.php">Catalogo</a></li>
                <li><a href="about.html">Sobre</a></li>
                <li><a href="contact.html">Contato</a></li>
            </ul>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <h3 class="destaques">Destaques</h3>
    <!--Destaques-->
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="./imagens/cyberpunk2077.png" alt="Item 1">
            </div>
            <div class="carousel-item">
                <img src="./imagens/eldenring.png" alt="Item 2">
            </div>
            <div class="carousel-item">
                <img src="./imagens/hollowknight.png" alt="Item 3">
            </div>
            <div class="carousel-item">
                <img src="./imagens/tekken8.png" alt="Item 4">
            </div>
            <div class="carousel-item">
                <img src="./imagens/nierautomata.png" alt="Item 5">
            </div>
        </div>
    </div>

   
    <!--Footer-->

    <footer>
        <p>&copy; 2024 Francisco Jedison. Todos os direitos reservados.</p>
    </footer>

    <script src="./javascript/script.js"></script>
</body>
</html>