<main>
    <div class="container-mt4">
        <div class="row">
            <div class="col">
                <h1>Регистрация</h1>
                <form action="../public/html/reg.php" method="post" name="registerform">
                    <p><label>Ваше имя:<br>
                            <input name="u_name"="20" type="text" value=""></label></p>
                    <p><label>Желаемый ник:<br>
                            <input name="u_nickname" size="30" type="text"></label></p>
                    <p><label>Ваш email:<br>
                            <input name="u_email" size="30" type="email"></label></p>
                    <p><label>Пароль:<br>
                            <input name="u_pass" size="30" type="password"></label></p>
                    <p><button class="btn btn-success" name="register" type="submit">Зарегистрироваться</button></p>
                    <p><a href="../public/html/log.php">Уже зарегистрированы?</a></p>
                </form>
            </div>
        </div>
    </div>
</main>

