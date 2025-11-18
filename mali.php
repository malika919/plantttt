<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mali.css">
    <title>Plant</title>
</head>
<body>
    <header class="header">
        <div class="header__top">
            <div class="header__image">
                <img src="images/PlaintSPb.com.svg" alt="logo">
            </div>
            <div class="header__nav">
                <a class="header__links" href="#">Каталог</a>
                <a class="header__links" href="#">Оплата и доставка</a>
                <a class="header__links" href="#">Акции</a>
                <a class="header__links" href="#">Личный кабинет</a>
                <a class="header__links" href="#">Корзина</a>
            </div>
        </div>
        <div class="header__fon">
            <h1 class="header__big">Цветы для вашего дома</h1>
            <pre class="header__text">
Растения в капшо станут красивым и 
модным дополнением для вашей 
квартиры или офиса</pre>
            <a href="#" class="header__link">Перейти в каталог</a>
            <!--<button class="header__btn">Перейти в каталог</button>-->
        </div>
    </header>
    <section class="center">
        <h2 class="header__special">Специальные предложения</h2>
        <div class="homeplant">
            <script>
                 const plants = [
                    {
                        img: "images/cart1.png",
                        name: "Фикусы",
                        text: "Эффектные украшения интерьера"
                    },
                    {
                        img: "images/cart2.png",
                        name: "Суккуленты",
                        text: "Маленькие и модные"

                    },
                    {
                        img: "images/cart3.png",
                        name: "Пальмы",
                        text: "Элегантный предмет декора"
                    }
                ]

                const container = document.querySelector(".homeplant");
                
                plants.forEach((plant) => {
                    const plantDiv = document.createElement('div');
                    plantDiv.className = 'plant';
                    plantDiv.innerHTML = `
                        <img src="${plant.img}" alt="${plant.name}">
                        <h3 class="plant__name">${plant.name}</h3>
                        <p class="plant__text">${plant.text}</p>
                    
                    `
                    container.appendChild(plantDiv);
                });
            </script>
        </div>
    </section>
    <h2>Каталог товаров</h2>

    <?php include 'inddex.php'; ?>
</body>
</html>