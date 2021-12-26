<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <style>
        .header__main-nav {
        }
    </style>
</head>
<body>
<header class="container header">
    <a class="header__logo" href="#">FoodPorn</a>
    <div class="header__searchBox">
        <button class="header__searchBox-buttonToggleFind"></button>
        <div class="header__searchBox-background"></div>
        <div class="header__search">
            <input type="text" class="header__search-input" required/>
            <span class="header__search-input-span">Поиск</span>
            <div class="header__search-input-icon"></div>
            <button class="header__search-buttonClose"></button>
        </div>
    </div>
    <nav class="header__navBox">
        <a href="#" class="header__navBox-buttonPerson"> </a>
        <a href="#" class="header__navBox-buttonCart"> </a>
        <button class="header__navBox-buttonToggleMenu"></button>
        <div class="header__navBox-background"></div>
        <div class="header__navBox-main">
            <div class="header__navBox-main-menu header__navBox-main-menu_positionCenter">
                <button class="header__navBox-main-menu-buttonClose"></button>
                <h5 class="header__navBox-main-menu-heading">Главное меню</h5>
                <div class="header__navBox-main-menu-categorisesBox">
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory" data-categoryId="100">Мясные блюда ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory" data-categoryId="101">Рыбные блюда ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory" data-categoryId="102">Сырные блюда ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory" data-categoryId="103">Творожные блюда ></button>
                </div>
            </div>
            <div class="header__navBox-main-menu" data-categoryPanelId="100">
                <button class="header__navBox-main-menu-buttonBack">Назад</button>
                <h5 class="header__navBox-main-menu-heading">Мясные блюда</h5>
                <div class="header__navBox-main-menu-categorisesBox">
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Супы ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Салыты ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                </div>
            </div>
            <div class="header__navBox-main-menu" data-categoryPanelId="101">
                <button class="header__navBox-main-menu-buttonBack">Назад</button>
                <h5 class="header__navBox-main-menu-heading">Рыбные блюда</h5>
                <div class="header__navBox-main-menu-categorisesBox">
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Супы ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Салыты ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                </div>
            </div>
            <div class="header__navBox-main-menu" data-categoryPanelId="102">
                <button class="header__navBox-main-menu-buttonBack">Назад</button>
                <h5 class="header__navBox-main-menu-heading">Сырные блюда</h5>
                <div class="header__navBox-main-menu-categorisesBox">
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Супы ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Салыты ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                </div>
            </div>
            <div class="header__navBox-main-menu" data-categoryPanelId="103">
                <button class="header__navBox-main-menu-buttonBack">Назад</button>
                <h5 class="header__navBox-main-menu-heading">Творожные блюда</h5>
                <div class="header__navBox-main-menu-categorisesBox">
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Супы ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Салыты ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 3 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 4 ></button>
                    <button class="header__navBox-main-menu-categoriesBox-buttonCategory">Категория 5 ></button>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="container main">
</main>
<footer class="container footer">
    <p>Подвал</p>
</footer>
<script src="{{asset("js/app.js")}}"></script>
</body>
</html>
