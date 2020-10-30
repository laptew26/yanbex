<?php
session_start();
include 'db.php';

if(isset($_SESSION['auth']))
{
    $stmt= $pdo->query('SELECT * FROM `users` WHERE login="'.$_SESSION['auth'].'"');
    $proverka = $stmt->fetch();
    $idR = $proverka['id'];
} else {
    header('Location: request.php');
}
include 'header.php';
?>
    <main id="main">
        <form method="post" class="auth" action="exit.php">
            <button type="submit" name="exit">Выход</button>
        </form>
        <?php
        echo '<p>Логин: '.$proverka['login'].'<p>';
        $stmt1 = $pdo->query('SELECT *, `requests`.id AS idR FROM `requests` ORDER BY idR DESC');
        while ($row = $stmt1->fetch())
        {
            $row['status'] = $pdo->query('SELECT * FROM `stats` WHERE id = '.$row['stat'])->fetch()[1];
            $row['userName'] = $pdo->query('SELECT * FROM `users` WHERE id = '.$row['user'])->fetch()[1];
            echo '<hr>';
            echo '<span>'.$row['a'].'</span>';
            echo '<span> &#8594; </span>';
            echo '<span>'.$row['b'].'</span>';
            echo '<p>Статус: '.$row['status'].'</p>';
            echo '<p>Пользователь принявший заказ: '.$row['userName'].'</p>';
            if($row['stat'] == 1) {
                echo '<a href="perform_request.php?id='.$row['id'].'">Принять заявку</a>';
            }
            else {
                echo '<p>Заказ забрали</p>';
            }
        }
        ?>
    </main>
<?php
include 'footer.php';
?>