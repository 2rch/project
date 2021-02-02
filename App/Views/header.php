<?php
/**
 * @var string $content
 */
?>
<!DOCTYPE html>
<html lang='ru' xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page</title>
</head>
<header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="../public/index.php"><img src="../public/pics/logo.jpg" width="70" height="46" alt="I.sh"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Каталог
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Обычные тремпели</a>
                    <a class="dropdown-item" href="#">Необычные тремпели</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Технологичные тремпели</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/log.php">Авторизация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Техподдержка</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
    </div>
</nav>
</header>
<body>
<aside>
    <div class="aside">
        <h3>Категории</h3>
        <ul>
            <li><a href="">Casual тремпели</a></li>
            <li><a href="">Дизайнерские тремпели</a></li>
            <li><a href="">Вычурные тремпели</a></li>
            <li><a href="">Тремпель на заказ</a></li>
            <li><a href="">Ещё тремпель</a></li>
        </ul>
    </div>
</aside>
<?php echo $content;?>

