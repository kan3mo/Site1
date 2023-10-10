<?php

require_once 'banco.php';

$id_jogo = addslashes($_POST['id_jogo']);
$nome_jogo = addslashes($_POST['nome_jogo']);
$img_jogo = addslashes($_POST['img_jogo']);
$descricao_jogo = addslashes($_POST['descricao_jogo']);
$sobre_jogo = addslashes($_POST['sobre_jogo']);


$atualizar = "UPDATE `jogos` SET `NOME_JOGO`='$nome_jogo',`DESCRICAO_JOGO`='$descricao_jogo',`IMG_JOGO`='$img_jogo',`SOBRE_JOGO`='$sobre_jogo' WHERE `ID_JOGO`=$id_jogo";

$query = mysqli_query($banco, $atualizar);

header('location:index.php?pagina=home');

?>