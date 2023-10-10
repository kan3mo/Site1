<?php
require 'banco.php';

$nome_jogo = $_POST['nome_jogo'];
$descrição_jogo = $_POST['descricao_jogo'];
$img_jogo = $_POST['img_jogo'];
$sobre_jogo = $_POST['sobre_jogo'];

$cad_jogo = "INSERT INTO `jogos`(`NOME_JOGO`, `DESCRICAO_JOGO`, `IMG_JOGO`,`SOBRE_JOGO`) VALUES ('$nome_jogo','$descrição_jogo','$img_jogo','$sobre_jogo')";

$query = mysqli_query($banco, $cad_jogo);

header('location: index.php');
?>