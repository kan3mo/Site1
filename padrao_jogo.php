<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hard Games</title>
    <style>
              .container{

            margin-top: 4%;
            padding: 0 10%;
            width: 60%;
            
            
        }


    </style>
    <?php require 'banco.php' ?>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <!--Navbar(Barra de navegação)-->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="?pagina=home">HardGames</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 85%;">
        <li class="nav-item" >
          <?php if(isset($_SESSION['usuario'])){ ?>
          <a class="nav-link"  href="cmd_logout.php"><?php echo $_SESSION['usuario']; ?></a>
          <?php }
          else{ ?>
          <a class="nav-link"  href="?pagina=login">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link"  href="?pagina=cadastro">Cadastrar</a>
          </li>
          <?php } ?>
        
      </ul>
    </div>
  </div>
</nav>
<?php 
if(!isset($_GET['jogo'])):
header('location:home');
else:
while ($linha = mysqli_fetch_array($consulta_jogos)): 
if($linha['ID_JOGO'] == $_GET['jogo']){
?>

<div class="container">

  <div class="card mb-3">
    <img src="images/<?php echo $linha['IMG_JOGO']; ?>" class="card-img-top" alt="Jogo">
    <div class="card-body">
      <h4 class="card-title text-center"><?php echo $linha['NOME_JOGO']; ?></h4>
      <p class="fs-5"><?php echo $linha['DESCRICAO_JOGO']; ?></p>
      <p class="card-text"><?php 

  echo $linha['SOBRE_JOGO'];?></p>

    </div>
  </div>
</div>
<?php
}
     endwhile; 
    endif; ?>