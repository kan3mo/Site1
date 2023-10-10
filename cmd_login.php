<?php

require 'banco.php';

$name_user = addslashes($_POST['name_user']);
$senha = addslashes($_POST['senha']);

$cmd_log = "SELECT * FROM `usuarios` WHERE `NAME_USER` = '$name_user' and `SENHA` = '$senha'";

$log = mysqli_query($banco, $cmd_log);

if(mysqli_num_rows($log) == 1):
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $name_user;
    header('location:index.php?pagina=home');

else:
    header('location:index.php?pagina=login&erro');

endif;

?>