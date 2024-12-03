<?php
session_start();

// Verifica se o método de pagamento foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentMethod = $_POST['payment_method'] ?? '';

    // Verifica se o método é válido
    $validMethods = ['credit_card', 'boleto', 'pix'];
    if (!in_array($paymentMethod, $validMethods)) {
        die("Método de pagamento inválido.");
    }

    // Processa o pagamento (apenas um exemplo)
    switch ($paymentMethod) {
        case 'credit_card':
            $message = "Pagamento com cartão de crédito confirmado!";
            break;
        case 'boleto':
            $message = "Boleto bancário gerado com sucesso!";
            break;
        case 'pix':
            $message = "Chave Pix gerada com sucesso!";
            break;
    }

    // Exibe a mensagem de confirmação
    echo "<h2>$message</h2>";
    echo "<p>Obrigado pela sua compra!</p>";
} else {
    header("Location: confirmar_pagamento.php");
    exit;
}
?>
