<?php
session_start();
ob_start();
$_SESSION = [];
// unset($_SESSION['id_usuario'], $_SESSION['nome']);

header("Location: http://localhost:3000/index.php");