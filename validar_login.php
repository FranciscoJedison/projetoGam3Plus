<?php
session_start();
include 'db.php'; // Arquivo de conexão com o banco

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Consultar no banco de dados para verificar o usuário
    $sql = "SELECT * FROM users WHERE nome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar se o usuário existe
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verificar a senha
        if (password_verify($senha, $user['senha'])) {
            // Criar as variáveis de sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['telefone'] = $user['telefone'];

            // Redirecionar para a página principal ou dashboard
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php?error=Senha incorreta.");
            exit();
        }
    } else {
        header("Location: login.php?error=Usuário não encontrado.");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>