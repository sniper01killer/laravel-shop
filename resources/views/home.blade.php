<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="wrapper">
        <header>
            <h1>мой сайт!</h1>
            <div class="logo">
                        <a href="/">
                            <img src="/public/img/4.png" alt="Логотип сайта" class="logo__img">
                            <span class="logo__text">Мой сайт</span>
                        </a>
                    </div>
            <nav>
                <ul class="main-menu">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>

            </nav>
        </header>
        <main>
            <p>контент</p>
            <img src="/public/img/2.jpg" alt="">
        </main>
        <footer>
            <p>&copy; Баннов Олег, 2026 г.</p>
        </footer>
    </div>
</html>