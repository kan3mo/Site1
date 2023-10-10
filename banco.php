<?php

//conexão com o Banco
$banco = new mysqli("localhost","root","","hard_games");

//consulta de Usuários
$query = "SELECT * FROM `usuarios`";
$consulta_usuarios = mysqli_query($banco, $query);

//consulta de Jogos
 $query = "SELECT * FROM `jogos`";
 $consulta_jogos = mysqli_query($banco, $query);
?>