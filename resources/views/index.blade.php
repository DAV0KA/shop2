<!DOCTYPE html>
<html>
    <head>
        <title>Простая HTML-страница</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>

        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ShopSmart</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Категории</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Товары</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex justify-content-center align-items-center">
            <img class="responsive-image" src="/img/4kw.jpg" alt="Мое изображение">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-bg-warning mb-3">
                        <div style="background: #F6EA02" class="card-body">
                            <h1 class="card-title">ShopSmart: Ваш идеальный онлайн магазин</h1>
                            <p class="card-text">Добро пожаловать в наш интернет-магазин с широким ассортиментом высококачественных товаров по привлекательным ценам. Нас отличает удобный сервис, безопасные платежи и персонализированный подход к клиентам. Присоединяйтесь и наслаждайтесь удовольствием от покупок уже сегодня!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
