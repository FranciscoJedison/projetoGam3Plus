<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>


        /*Reset CSS: remove margens e preechimentos padrões, define box-sizing para borda-box para incluir
padding e border no calculo da largura/altura dos elementos, e define a fonte padrão para serif */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:cursive;
}

/*Define o layout principal do body para flex, centraliza seu conteúdo horizontal e verticalmente */
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #444547;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    overflow: hidden;
}

/* Define a posição, tamanho e alinhamento do container principal */
.container{
    position: relative;
    width: 500px;
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10% 10% 10% 10%;
    background-color:rgba(31, 32, 32, 0.2);
}

/*Estiliza os spans dentro do .container, posicionando-os absolutamente para cobrir todo o container */
.container span{
    position: absolute;
    inset: 0;
    border: 2px solid #fff;
    transition: 0.5s;
}

/*Personaliza a forma dos spans usando border-radius para criar formar únicas e aplica animações*/
.container span:nth-child(1){
    border-radius: 10% 10% 10% 10%;
}

.container span:nth-child(2){
    border-radius: 50% 63% 62% 44% / 41% 47% 57% 59%;
    animation: animate 10s linear infinite;
}

/*.container span:nth-child(3){
    border-radius: 41% 44% 56% 59% / 38% 62% 63% 37%;
    animation: animate2 10s linear infinite;
}
.container span:nth-child(4){
    border-radius: 30% 30% 30% 30% / 20% 20% 20% 20%;
    animation: animate3 5s linear reverse infinite;
}

/*Aumenta a espessura da borda e aplica um sombreado quando o .container é passado por cima*/
.container:hover span{
    border: 6px solid var(--clr);
    filter: drop-shadow(0 0 20px var(--clr));
}
/* define as keyframes para as animações dos spans, rotacionando-os 360 graus*/
@keyframes animate{
    0% {
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}

@keyframes animate2{
    0%{
        transform: rotate(360deg);
    }
    100%{
        transform: rotate(0deg);
    }
}
@keyframes animate3{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}

/*estiliza o .form-container para alinhar e organizar os elementos do fomrulário de login*/
.form-container{
position: absolute;
width: 300px;
height: 100%;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
gap: 20px;
}

/*Define o estilo do titulo do formulário*/
.form-container h2{
    font-size: 2em;
    color: #fff;
}

/*Estiliza o .input-container para alinhar os campos de entrada*/
.input-container{
    position: relative;
    width: 100%;
}

/*Estiliza os ampos de entrada para preencher o .input-container, com estilo transparente e borda*/
.input-container input{
    position: relative;
    width: 100%;
    padding: 12px 20px;
    background: transparent;
    border: 2px solid #e06332;
    border-radius: 40px;
    font-size: 1.2em;
    color: #fff;
    box-shadow: none;
    outline: none;
}
/*Remove a borda de foco padrão dos campos de entrada para manter a estetica*/
.input-container input:focus{
    outline: none;
    border-color: #fff;
}
/*Personaliza o botão de envio com um gradiente de cor e remove a borda*/
.input-container input[type="submit"]{
    width: 100%;
    background: #0078ff;
    background: -webkit-linear-gradient(to right, #240b36, #dd431d);
    background: linear-gradient(to right, #240b36, #dd431d);
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/*Estiliza o .links-container para organizar os links de ação*/
.links-container{
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}

.links-container a{
    color: #f5eded;
    text-decoration: none;
}
    </style>
</head>

<body>
    <div class="login-container">
        <form action="validar_login.php" method="POST">
            <!-- Container principal que inclui o formulário de login e o fundo animado-->
    <div class="container">
        <!--Span para circulos de fundos animados, com cores definidas via variáveis CSS-->
        <span style="--clr:#db5e25;"></span> <!--cor roxa-->
        <!-- <span style="--clr:#d88a24;"></span> Cor laranja-->
        <!-- <span style="--clr:#e900d5;"></span> Cor magenta-->
        <!-- <span style="--clr:#05d73a;"></span>  Cor Verde -->

        <!--container formulário de login-->
        <div class="form-container">
            <!--Titulo do Formulário-->
            <h2>Login</h2>
            <!--Container para o campo mde usuário-->
            <div class="input-container">
                <input type="text" name ="nome" class="input-field" placeholder="Usuário" required>
            </div>

            <!--Container para o campo de senha-->
            <div class="input-container">
                <input type="password" name="senha" class="input-field" placeholder="Senha" required>
            </div>

            <!--Container para o botão de submit-->
            <div class="input-container">
                <input type="submit" value="Acessar" class="button">
            </div>

            <!--Links para ações auxiliares como recuperação de senha e cadastro-->
            <div class="links-container">
                <a href="index.php">Voltar</a>
                <a href="register.php">Cadastre-se</a>
            </div>
        </div>
    </div>

        </form>
    </div>
    <script src="./javascript/script.js"></script>
</body>
</html>