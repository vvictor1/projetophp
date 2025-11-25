<?php

$contato = [
    "email" => $_POST['email'],
    "telefone" => $_POST['telefone'],
];

$arquivo = "contato.json";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, "[]");
}

$dados = json_decode(file_get_contents($arquivo), true);
$dados[] = $contato;

file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2 style="text-align:center; color:#ff0000; margin-top:40px;">
    Agradecemos pelo contato!
</h2>

<p style="text-align:center; font-size:18px;">
    Sua mensagem foi enviada ao suporte.
</p>

</body>
</html>
