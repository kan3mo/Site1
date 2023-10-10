<?php

require_once 'banco.php';

$nome = $_POST['nome'];
$name_user = $_POST['user_name'];
$senha = $_POST['password'];

$cmd_cad = "INSERT INTO `usuarios`(`NOME`, `NAME_USER`, `SENHA`) VALUES ('$nome','$name_user','$senha')";

$cad = mysqli_query($banco, $cmd_cad);

header('location:index.php?pagina=login');
?>