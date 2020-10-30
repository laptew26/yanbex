<?php
require_once 'db.php';
include 'header.php';
?>
<main id="main">
    <form method="post" action="add_req.php">
        <div>
            <input type="text" name="a" placeholder="Начальная точка">
        </div>
        <div>
            <input type="text" name="b" placeholder="Конечная точка">
        </div>
        <div>
            <button type="submit" name="enter">Отправить заявку</button>
        </div>
    </form>
</main>
<?php
include 'footer.php';
?>