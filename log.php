<?php include("header.php"); ?>
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
<main>
<div class="container-mt4">
    <div class="row">
        <div class="col">
            <h1>Вход:</h1>
            <form action="" method="post" name="loginf">
                <p><label>Ник:<br>
                        <input name="u_nickname" size="25" type="text"></label></p>
                <p><label>Пароль:<br>
                        <input name="password" size="25" type="password"></label></p>
                <p><button class="btn btn-success" name="login" type="submit">Авторизоваться</button></p>
                <p>Еще не зарегистрированы, то </br><a href= "reg.php">зарегистрируйтесь</a>!</p>
            </form>
        </div>
    </div>
</div>
</main>
<?php include("footer.php"); ?>