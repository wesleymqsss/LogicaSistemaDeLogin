<?php
session_start();

if(empty ($_SESSION['usuario'])){
    header('Location: login.php');
    exit ();
}

echo "Bem vindo, ".$_SESSION['usuario']."!";
echo '</br>';
echo '<a href= "logout.php">Sair</a>'; 