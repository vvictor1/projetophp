<?php 
$burgers = [
    [
        "nome" => "Classic Burger", 
        "desc" => "Pão Brioche, Um smash 180g, Cheddar Derretido, Molho Especial", 
        "preco" => "24.90",
        "img" => "https://imagens.nivel.com.br/wwwroot/repositorioImagens/niveldelivery/9420/9420_product_5c8e480260f542b39fdb6edacdd2dd24.jpg?_id=51c3f1b8f30248deb90fad700a3e7ea7"
    ],
    [
        "nome" => "Monster X-Burger", 
        "desc" => "Pão Brioche, Três Smash 150g, Cheddar Derretido, Bacon Crocante, Cebolas Caramelizadas, Molho Especial.", 
        "preco" => "47,90",
        "img" => "https://vejario.abril.com.br/wp-content/uploads/2016/11/7979_extreme-monster-brothers-burger-cred-tomas-rangel.jpeg?crop=1&resize=1212,909"
    ],
    [
        "nome" => "Garden Burger", 
        "desc" => "Pão brioche, Hambúrguer vegetal, rúcula, Cenoura ralada, Beterraba ralada.", 
        "preco" => "29,90",
        "img" => "https://s2.glbimg.com/jqfaCA6V4Yb2xgU1JzPD200Kaxk=/smart/e.glbimg.com/og/ed/f/original/2018/07/20/matilda_vegano_wellington_nemeth_1.jpg"
    ],
    [
    "nome" => "Combo Casal",
    "desc" => "2 Classic Burger, Batata Média, 2 Refrigerante Lata",
    "preco" => "55,90",
    "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKW8UXd_USaZaBltSxpqnlOfar43yfMk8ItA&s"
    ],
    [
    "nome" => "Combo 4 Liberta",
    "desc" => "4 Classic Burger, 1 Batata Grande, 10 Coxinhas, 1 Refrigerante 2L",
    "preco" => "123,90",
    "img" => "https://i.postimg.cc/FHc3D49Z/casal.webp"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mestre Do Burger</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAV -->
<header>
    <h1>Mestre Do Burger</h1>
    <nav>
        <a href="#inicio">Início</a>
        <a href="#cardapio">Cardápio</a>
        <a href="#contato">Suporte</a>
    </nav>
</header>

<!-- BANNER -->
<section class="banner" id="inicio">
    <h2>O Melhor Hambúrguer da Região!</h2>
</section>

<!-- CARDÁPIO -->
<section class="cardapio" id="cardapio">
    <h1>Cardápio</h1>

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
