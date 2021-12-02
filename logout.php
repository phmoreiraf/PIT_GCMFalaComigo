<?php
session_start();

unset($_SESSION['usuario']);

$_SESSION['msg'] = "Sessao encerrada";

header("Location: index.php");
?>