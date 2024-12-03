<?php
session_start();

//Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    //Se não estiver logado, redirecionar para o login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Catálogo de Produtos</title>
<link rel="stylesheet" href="./css/style.css">
<script src="./javascript/script.js" defer></script>
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

<!--Carrinho -->
<div id="cart">
    <h2>Carrinho</h2>
    <ul id="cart-items"></ul>
    <p>Total: R$ <span id="cart-total">0.00</span></p>
    <a href="#" id="finalizar-compra"><button>Finalizar Compra</button></a>
  </div>

<!--Main section-->
<main class="product-grid-container">
    <div id="product-grid">
        <div class="product-item" data-id="1" data-name="Cyberpunk 2077" data-price="199.90">
            <img src="./imagens/cyberpunk2077.png" alt="Produto 1">
            <h2>Cyberpunk 2077</h2>
            <h2>Preço: R$ 199,90</h2>
            <button onclick="abrirModal(1)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="2" data-name="Persona 5" data-price="249.90">
            <img src="./imagens/p5royal.png" alt="Produto 2">
            <h2>Persona 5</h2>
            <h2>Preço: R$ 249,90</h2>
            <button onclick="abrirModal(2)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="3" data-name="Final Fantasy 16" data-price="219.90">
            <img src="./imagens/ff16.png" alt="Produto 3">
            <h2>Final Fantasy 16</h2>
            <h2>Preço: R$ 219,90</h2>
            <button onclick="abrirModal(3)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="4" data-name="Monster Hunter World" data-price="99.90">
            <img src="./imagens/mhworld.png" alt="Produto 4">
            <h2>Monster Hunter World</h2>
            <h2>Preço: R$ 99,90</h2>
            <button onclick="abrirModal(4)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="5" data-name="Monster Hunter Rise" data-price="139.90">
            <img src="./imagens/mhrise1.png" alt="Produto 5">
            <h2>Monster Hunter Rise</h2>
            <h2>Preço: R$ 139,90</h2>
            <button onclick="abrirModal(5)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="6" data-name="Elden ring" data-price="229.90">
            <img src="./imagens/eldenring.png" alt="Produto 6">
            <h2>Elden Ring</h2>
            <h2>Preço: R$ 229.90</h2>
            <button onclick="abrirModal(6)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="7" data-name="Dark Souls Remastered" data-price="154.90">
            <img src="./imagens/dsremastered.png" alt="Produto 7">
            <h2>Dark Souls Remastered</h2>
            <h2>Preço: R$ 154,90</h2>
            <button onclick="abrirModal(7)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="8" data-name="Dark souls 2 Scholar of the First Sin" data-price="154.90">
            <img src="./imagens/ds2.png" alt="produto 8">
            <h2>Dark souls 2 Scholar of the First Sin</h2>
            <h2>Preço: R$ 154,90</h2>
            <button onclick="abrirModal(8)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="9" data-name="Dark souls 3" data-price="229.90">
            <img src="./imagens/ds33.png" alt="Produto 9">
            <h2>Dark souls 3</h2>
            <h2>Preço: R$ 229,90</h2>
            <button onclick="abrirModal(9)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="10" data-name="Nier:Automata" data-price="107.00">
            <img src="./imagens/nierautomata.png" alt="Produto 10">
            <h2>Nier:Automata</h2>
            <h2>Preço: R$ 107.00</h2>
            <button onclick="abrirModal(10)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="11" data-name="Silent Hill 2" data-price="349.90">
            <img src="./imagens/silenthill2.png" alt="Produto 11">
            <h2>Silent Hill 2</h2>
            <h2>Preço: R$ 349.90</h2>
            <button onclick="abrirModal(11)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="12" data-name="Tekken 8" data-price="269.90">
            <img src="./imagens/tekken8.png" alt="Produto 12">
            <h2>Tekken 8</h2>
            <h2>Preço: R$ 269,90</h2>
            <button onclick="abrirModal(12)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="13" data-name="Street Fighter VI" data-price="249.90">
            <img src="./imagens/sf66.png" alt="Produto 13">
            <h2>Street Fighter VI</h2>
            <h2>Preço: R$ 249.90</h2>
            <button onclick="abrirModal(13)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="14" data-name="Persona 3 Reload" data-price="299.90">
            <img src="./imagens/p3reload.png" alt="Produto 14">
            <h2>Persona 3 Reload</h2>
            <h2>Preço: 299.90</h2>
            <button onclick="abrirModal(14)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="15" data-name="Hollow Knight" data-price="46.99">
            <img src="./imagens/hollowknight.png" alt="Produto 15">
            <h2>Hollow knight</h2>
            <h2>Preço: R$ 46.99</h2>
            <button onclick="abrirModal(15)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="16" data-name="Dead Cells" data-price="47.49">
            <img src="./imagens/deadcells.png" alt="Produto 16">
            <h2>Dead Cells</h2>
            <h2>Preço: R$ 47.49</h2>
            <button onclick="abrirModal(16)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="17" data-name="Hades" data-price="73.99">
            <img src="./imagens/hades.png" alt="Produto 17">
            <h2>Hades</h2>
            <h2>Preço: R$ 73.99</h2>
            <button onclick="abrirModal(17)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="18" data-name="Hades II" data-price="88.99">
            <img src="./imagens/hades2.png" alt="Produto 18">
            <h2>Hades II</h2>
            <h2>Preço: R$ 88.99</h2>
            <button onclick="abrirModal(18)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="19" data-name="Baldur's Gate 3" data-price="159.99">
            <img src="./imagens/bg3.png" alt="Produto 19">
            <h2>Baldur's Gate 3</h2>
            <h2>Preço: R$ 159,99</h2>
            <button onclick="abrirModal(19)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="20" data-name="Blasphemous" data-price="133.90">
            <img src="./imagens/blasphemous.png" alt="Produto 20">
            <h2>Blasphemous</h2>
            <h2>Preço: R$ 133.90</h2>
            <button onclick="abrirModal(20)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
        <div class="product-item" data-id="21" data-name="Cuphead" data-price="36.99">
            <img src="./imagens/cuphead.png" alt="Produto 21">
            <h2>Cuphead</h2>
            <h2>Preço: R$ 36,99</h2>
            <button onclick="abrirModal(21)">Ver informação</button>
            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
    </div>
</main>
<br>


<!-- Estrutura do Modal -->
<div id="meuModal" class="modal">
<div class="modal-content">
    <span class="close" onclick="fecharModal()">&times;</span>
    <h2 id="produtoNome">Nome do Produto</h2>
    <p id="produtoDescricao">Descrição do produto aqui.</p>
    <img id="produtoImagem" src="" alt="Imagem do Produto">
</div>
</div>

<!--Footer-->

<footer>
    <p>&copy; 2024 Francisco Jedison. Todos os direitos reservados.</p>
</footer>

<script src="./javascript/script.js"></script>


</div>
</form>
</body>
</html>