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
            padding: 0 4%;
            width: 60%;
            
        }
        .pesquisa{
          display: flex;
          margin-top: 4%;
          width: 60%;
          padding-left: 40%;
        }

    </style>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <!--Navbar(Barra de navegação)-->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HardGames</a>
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
      <!--Barra de Pesquisa-->
<form class="pesquisa" action="search_jogos.php" method="get">
        <input class="form-control me-2" type="text" name="pes">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <!--Todos os Cards-->
      
<div class="container">
<?php if(isset($_SESSION['login']) == true){ ?>
<a href="?pagina=inserir_jogo" class="btn btn-success">Deseja adicionar algum Jogo</a>
<?php
}
  while ($linha = mysqli_fetch_array($consulta_jogos)):
    
  ?>
  <div class="card mb-3">
    <?php if(isset($_SESSION['login']) == true){ ?>
      <a href="?pagina=descricao&jogo=<?php echo $linha['ID_JOGO']; ?>">
    <img src="images/<?php echo $linha['IMG_JOGO']; ?>" class="card-img-top" alt="Jogo"></a>
    <?php }
    else{
      ?> 
      <a href="index.php?pagina=login" class="nav-link">
      <img src="images/<?php echo $linha['IMG_JOGO']; ?>" class="card-img-top" alt="Jogo"></a>
      <?php
    } ?>
    <div class="card-body">
      <h5 class="card-title"><?php echo $linha['NOME_JOGO']; ?></h5>
      <p class="card-text"><?php echo $linha['DESCRICAO_JOGO']; ?></p>
      
      <?php if(isset($_SESSION['login']) == true){
  ?>
          <div class="btn-group">

            <a href="?pagina=inserir_jogo&editar=<?php echo $linha['ID_JOGO']; ?>" class="btn btn-outline-warning">Atualizar</a>
            <a href="deletar_jogo.php?id_jogo=<?php echo $linha['ID_JOGO']; ?>" class="btn btn-outline-danger">Deletar</a>
            
          </div>
          <?php }
 ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>

</body>
</html>