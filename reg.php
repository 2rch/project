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
                <h1>Регистрация</h1>
                <form action="reg.php" method="post" name="registerform">
                    <p><label>Ваше имя:<br>
                            <input name="u_name"="20" type="text" value=""></label></p>
                    <p><label>Желаемый ник:<br>
                            <input name="u_nickname" size="30" type="text"></label></p>
                    <p><label>Ваш email:<br>
                            <input name="u_email" size="30" type="email"></label></p>
                    <p><label>Пароль:<br>
                            <input name="u_pass" size="30" type="password"></label></p>
                    <p><button class="btn btn-success" name="register" type="submit">Зарегистрироваться</button></p>
                    <p><a href="log.php">Уже зарегистрированы?</a></p>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include("footer.php"); ?>
