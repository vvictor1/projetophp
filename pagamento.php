<?php
$burger = $_POST['burger'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h2 style="text-align:center;color:#ff0000;">Selecione o Método de Pagamento</h2>

<form action="final.php" method="POST">

    <input type="hidden" name="burger" value="<?= $burger ?>">
    <input type="hidden" name="nome" value="<?= $nome ?>">
    <input type="hidden" name="endereco" value="<?= $endereco ?>">
    <input type="hidden" name="telefone" value="<?= $telefone ?>">

    <label>Método de pagamento:</label>
    <select name="pagamento" required>
        <option>Cartão de Crédito</option>
        <option>Cartão de Débito</option>
        <option>Pix</option>
        <option>Dinheiro</option>
    </select>

    <button type="submit">Finalizar pedido</button>

</form>

</body>
</html>
