<?php
require_once 'db.php';

$a=$_POST['a']; //Точка А
$b=$_POST['b']; //Точка Б

$stmt= $pdo->query('INSERT INTO `requests` (`a`, `b`) VALUES ("'.$a.'","'.$b.'")');

header('Location: index.php');