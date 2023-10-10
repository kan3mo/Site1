<?php
require 'banco.php';
$id = $_GET['id_jogo'];

$deletar = '';
$query = mysqli_query($banco, $deletar);

header('location: index.php');
?>