<?php
session_start();
include 'db.php';

if(isset($_SESSION['auth']))
{
    $stmt= $pdo->query('SELECT * FROM `users` WHERE login="'.$_SESSION['auth'].'"');
    $proverka = $stmt->fetch();
    $idR = $proverka['id'];
    header('Location: index.php');
} else {

}
include 'header.php';
?>

    <main id="main">
        <h2>Авторизация</h2>
        <form method="post" action="log.php">
            <div>
                <input type="text" name="login"placeholder="Логин">
            </div>
            <div>
                <input type="password" name="password" placeholder="Пароль">
            </div>
            <div>
                <button type="submit" name="enter">Вход</button>
            </div>
        </form>
        <p>Вы не зарегистрированы?<a href="register.php"> Жмяк! </a> </p>
    </main>

<?php
include 'footer.php';
?>