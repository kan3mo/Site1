<?php require_once 'banco.php'; 
session_start();
if(isset($_GET['pagina'])):
  $pagina = $_GET['pagina'];
else:
  $pagina = 'home';

endif;

switch ($pagina) {
  default: include 'home.php'; break;
  case 'cadastro': include 'cadastro.php';break;
  case 'inserir_jogo': include 'inserir_jogo.php';break;
  case 'login' : include 'login.php';break;
  case 'pes' : include 'search_jogos.php';break;
  case 'descricao' : include 'padrao_jogo.php';break;
}
?>
