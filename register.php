<?php
require_once 'db.php';
include 'header.php';
?>
    <main id="main">
        <h2>Регистрация</h2>
        <form method="post" action="reg.php">
            <div>
                <input type="text" name="login" placeholder="Логин">
            </div>
            <div>
                <input type="password" name="password" placeholder="Пароль">
            </div>
            <div>
                <button type="submit"  name="enter">Регистрация</button>
            </div>
        </form>
        <p>Вы зарегистрированы?<a href="auth.php"> Жмяк! </a> </p>
    </main>
<?php
include 'footer.php';
?>