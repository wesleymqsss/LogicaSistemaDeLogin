<?php
//funcao header() envia o cabeçalho HTML (redirecionamento para o local desejado)
session_start();

if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);

    // usuario == admin e senha == admin
    if ($usuario == 'admin' && $senha == 'admin'){
       $_SESSION['usuario'] = $usuario;
       header('Location: welcome.php');
       
    }else {
        echo 'usuario ou senha invalidos' ;
        echo '<a href="index.php">Tentar novamente<a/>';
    }
 } else {
    echo 'Preencha todos os dados ';
    echo '<a href="index.php">Voltar ao formulário<a/>';
}

