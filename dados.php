<?php 
$burger = $_GET['burger'] ?? "Desconhecido";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2 style="text-align:center;color:#ff0000;">Informações do Cliente</h2>

<form action="pagamento.php" method="POST">

    <input type="hidden" name="burger" value="<?= $burger ?>">

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Endereço:</label>
    <input type="text" name="endereco" required>

    <label>Telefone:</label>
    <input type="text" name="telefone" required>

    <button type="submit">Continuar</button>
</form>

</body>
</html>
