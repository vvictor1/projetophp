<?php 
$burgers = [
    [
        "nome" => "Classic Burger", 
        "desc" => "Pão brioche, carne 180g, cheddar, alface e tomate.", 
        "preco" => "24.90",
        "img" => "https://images.unsplash.com/photo-1606756790138-223a8f1e4a47"
    ],
    [
        "nome" => "Monster Burger", 
        "desc" => "Dois smash 100g, cheddar duplo, bacon e molho especial.", 
        "preco" => "32.90",
        "img" => "https://images.unsplash.com/photo-1550317138-10000687a72b"
    ],
    [
        "nome" => "Veggie Burger", 
        "desc" => "Hambúrguer vegano de grão-de-bico, maionese vegana e salada fresca.", 
        "preco" => "27.90",
        "img" => "https://images.unsplash.com/photo-1605478371318-4cf82c6f0485"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
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
        <a href="#contato">Contato</a>
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

        <?php foreach ($burgers as $produto): ?>
            <div class="item">

                <img src="<?= $produto['img'] ?>">

                <h3><?= $produto['nome'] ?></h3>
                <p><?= $produto['desc'] ?></p>
                <span>R$ <?= $produto['preco'] ?></span>

                <!-- Botão que leva para dados.php -->
                <form action="dados.php" method="GET">
                    <input type="hidden" name="burger" value="<?= $produto['nome'] ?>">
                    <button type="submit">Pedir</button>
                </form>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- CONTATO -->
<section class="contato" id="contato">
    <h2>Contato com o Suporte</h2>

    <form action="salvar_contato.php" method="POST">
        <label>E-mail:</label>
        <input type="email" name="email" required>

        <label>Telefone:</label>
        <input type="text" name="telefone" required>

        <button type="submit">Enviar</button>
    </form>
</section>

</body>
</html>
