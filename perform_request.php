<?php
session_start();
require_once 'db.php';

$requestId = $_GET['id'];

$userID= $pdo->query('SELECT * FROM `users` WHERE login="'.$_SESSION['auth'].'"')->fetch()[0];


$stmt = $pdo->query('UPDATE `requests` SET `stat` = "2", `user`
                        = "'.$userID.'" WHERE `requests`.`id` ='.$requestId);
header('Location: index.php');
?>