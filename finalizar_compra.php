<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart = json_decode(file_get_contents('php://input'), true);

    if ($cart && is_array($cart)) {
        $_SESSION['cart'] = $cart;

        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        echo json_encode([
            'status' => 'success',
            'message' => 'Carrinho salvo com sucesso.',
            'total' => $total
        ]);
        exit;
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Dados do carrinho inválidos.'
        ]);
        exit;
    }
}

$cart = $_SESSION['cart'] ?? [];
$total = array_reduce($cart, function ($carry, $item) {
    return $carry + ($item['price'] * $item['quantity']);
}, 0);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Resumo da Compra</h2>
    <?php if (empty($cart)): ?>
        <p>Seu carrinho está vazio.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($cart as $item): ?>
                <li><?= htmlspecialchars($item['name']) ?> - R$ <?= number_format($item['price'], 2, ',', '.') ?> x <?= htmlspecialchars($item['quantity']) ?></li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Total: R$ <?= number_format($total, 2, ',', '.') ?></strong></p>
        <form action="processar_pagamento.php" method="POST">
        <h2>Escolha o Método de Pagamento</h2>
        <div class="form-group">
                <label for="payment-method">Método de Pagamento:</label>
                <select name="payment_method" id="payment-method" required>
                    <option value="credit_card">Cartão de Crédito</option>
                    <option value="boleto">Boleto Bancário</option>
                    <option value="pix">Pix</option>
                </select>
            <button type="submit">Confirmar Pagamento</button>
            </div>
        </form>
        </div>
    <?php endif; ?>
    <script src="./javascript/js.script"></script>
</body>
</html>

