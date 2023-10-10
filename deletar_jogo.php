<?php

require 'banco.php';

$id_jogo = $_GET['id_jogo'];

$del_jogo = "DELETE FROM `jogos` WHERE ID_JOGO = $id_jogo";
$query = mysqli_query($banco, $del_jogo);
header('location: index.php');

?>