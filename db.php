<?php
//Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";
//criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//verificar conexão
if($conn->connect_error){
    die("Conexão Falhou: ".$conn->connect_error);
}
?>