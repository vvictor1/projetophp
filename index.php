<?php 
$burgers = [
    [
        "nome" => "Classic Burger",
        "desc" => "Pão brioche, carne 180g, queijo cheddar, alface e tomate.",
        "preco" => "24.90",
        "img" => "https://images.unsplash.com/photo-1601050690597-df0581317f32"
    ],
    [
        "nome" => "Monster Burger",
        "desc" => "Dois smash 100g, cheddar duplo, bacon e molho especial.",
        "preco" => "32.90",
        "img" => "https://images.unsplash.com/photo-1568901346375-23c9450c58cd"
    ],
    [
        "nome" => "Veggie Burger",
        "desc" => "Hambúrguer de grão-de-bico, maionese vegana e salada fresca.",
        "preco" => "27.90",
        "img" => "https://images.unsplash.com/photo-1607013404020-045100a06c2c"
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

            <?php foreach ($burgers as $item): ?>
                <div class="item">
                    <img src="<?= $item['img'] ?>" alt="<?= $item['nome'] ?>">
                    <h3><?= $item['nome'] ?></h3>
                    <p><?= $item['desc'] ?></p>
                    <span>R$ <?= $item['preco'] ?></span>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <!-- CONTATO -->
    <footer id="contato">
        <h2>Contato</h2>

        <form action="send.php" method="POST">
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu e-mail" required>
            <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>

        <p>📍 Rua dos Sabores, 123 – Centro</p>
        <p>📞 (11) 99999-9999</p>
        <p>© 2025 Mundo Burger – Todos os direitos reservados.</p>
    </footer>

</body>
</html>
