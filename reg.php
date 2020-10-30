<?php
session_start();
require_once 'db.php';

$login=$_POST['login'];
$password=$_POST['password'];

$stmt = $pdo->query('INSERT INTO `users` (`login`, `password`) VALUES (
																			   "'.$login.'",
                                                                               "'.$password.'")');

header('Location: index.php');