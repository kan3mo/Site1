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
            margin-top: 2%;
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
    <a class="navbar-brand" href="index.php?pagina=home">HardGames</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 85%;">
        <li class="nav-item" >
          <?php session_start(); 
          if(isset($_SESSION['usuario'])){ ?>
          <a class="nav-link"  href="cmd_logout.php"><?php echo $_SESSION['usuario']; ?></a>
          <?php }
          else{ ?>
          <a class="nav-link"  href="index.php?pagina=login">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link"  href="index.php?pagina=cadastro">Cadastrar</a>
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
<?php 

require 'banco.php';

$chave = $_GET['pes'];

$cmd_pesquisar = "SELECT * FROM `jogos` WHERE `NOME_JOGO` LIKE '%$chave%'";

$pes = mysqli_query($banco, $cmd_pesquisar);

if(mysqli_num_rows($pes) >= 1):
    while ($linha = mysqli_fetch_array($pes)):
    
        ?>
        <div class="container">
        <div class="card mb-3">
          <img src="images/<?php echo $linha['IMG_JOGO']; ?>" class="card-img-top" alt="Jogo">
          <div class="card-body">
            <h5 class="card-title"><?php echo $linha['NOME_JOGO']; ?></h5>
            <p class="card-text"><?php echo $linha['DESCRICAO_JOGO']; ?></p>
            
      <?php if(isset($_SESSION['login'])){ ?>
                <div class="btn-group">
      
                  <a href="?pagina=inserir_jogo&editar=<?php echo $linha['ID_JOGO']; ?>" class="btn btn-outline-warning">Atualizar</a>
                  <a href="deletar_jogo.php?id_jogo=<?php echo $linha['ID_JOGO']; ?>" class="btn btn-outline-danger">Deletar</a>
                  
                </div>
      <?php }?>
                
          </div>
        </div>
        </div>
        <?php endwhile; 

else:
    header('location:index.php?pagina=home&gameNãoEncontrado');

endif;
?>
</body>
</html>