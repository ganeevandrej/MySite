<?php 
session_start();

unset($_SESSION['id']);
unset($_SESSION['login']);

header('Location: http://mysite/index.php');