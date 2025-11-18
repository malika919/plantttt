<?php

$cards = [
    ['src' => 'cardimg1.png', 'title' => 'Замиокулькас замифолия', 'price' => 955],
    ['src' => 'cardimg2.png', 'title' => 'Суккулент микс D5 H8-10', 'price' => 880],
    ['src' => 'cardimg3.png', 'title' => 'Хамедорея Элеганс', 'price' => 1190],
    ['src' => 'cardimg4.png', 'title' => 'Фикус Бенж Наташа', 'price' => 1490],
    ['src' => 'cardimg5.png', 'title' => 'Фикус Эластика', 'price' => 1090],
    ['src' => 'cardimg6.png', 'title' => 'Хедера Хеликс микс', 'price' => 955],
    ['src' => 'cardimg7.png', 'title' => 'Антуриум Андрэ', 'price' => 860],
    ['src' => 'cardimg8.png', 'title' => 'Диффенбахия', 'price' => 1200]
];

?>

<head>
  <link rel="stylesheet" href="mali.css">
</head>
<body>
    <div class="content">
        <div class="cards">
        <?php foreach($cards as $card => $inf){ ?>
            <div class="card">
                <img src="images/<?=$inf['src']?>" alt="image">
                <p class="cardTitle"><?=$inf['title']?></p>
                <p class="cardPrice"><?=$inf['price']?> р/шт</p>
                <button class="cardButton" onclick="buttonAddProduct(this)">Добавить в корзину</button>
            </div>
        <?php } ?>
        </div>
    </div>
    
<script>
    function buttonAddProduct(){
        event.target.textContent = 'Добавлено в корзину';
        event.target.style.backgroundColor = 'grey';
        event.target.style.color = 'white';
    }
</script>
</body>