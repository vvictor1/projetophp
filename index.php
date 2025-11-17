<?php 
$burgers = [
    [
        "nome" => "Classic Burger",
        "desc" => "Pão brioche, carne 180g, queijo cheddar, alface e tomate.",
        "preco" => "24.90"
    ],
    [
        "nome" => "Monster Burger",
        "desc" => "Dois smash 100g, cheddar duplo, bacon e molho especial.",
        "preco" => "32.90"
    ],
    [
        "nome" => "Veggie Burger",
        "desc" => "Hambúrguer de grão-de-bico, maionese vegana e salada fresca.",
        "preco" => "27.90"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Burger</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- NAV -->
    <header>
        <h1>Mundo Burger</h1>
        <nav>
            <a href="#inicio">Início</a>
            <a href="#cardapio">Cardápio</a>
        </nav>
    </header>

    <!-- BANNER -->
    <section class="banner" id="inicio">
        <h2>O Melhor Hambúrguer da Cidade!</h2>
    </section>

    <!-- CARDÁPIO -->
    <section class="cardapio" id="cardapio">
        <h2>Nosso Cardápio</h2>

        <div class="produtos">

            <?php foreach ($burgers as $item): ?>
                <div class="item">
                    <h3><?= $item['nome'] ?></h3>
                    <p><?= $item['desc'] ?></p>
                    <span>R$ <?= $item['preco'] ?></span>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

</body>
</html>

