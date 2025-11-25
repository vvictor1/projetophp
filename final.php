<?php

$pedido = [
    "hamburguer" => $_POST['burger'],
    "nome" => $_POST['nome'],
    "endereco" => $_POST['endereco'],
    "telefone" => $_POST['telefone'],
    "pagamento" => $_POST['pagamento'],

];

$arquivo = "pedidos.json";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, "[]");
}

$dados = json_decode(file_get_contents($arquivo), true);
$dados[] = $pedido;
file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;color:#ff0000;">Pedido Realizado!</h2>

<p style="text-align:center;font-size:20px;">
    Tempo estimado para entrega: <b>50-70 minutos</b><br><br>
    Obrigado pelo seu pedido, <?= $pedido['nome'] ?>!
</p>

</body>
</html>
