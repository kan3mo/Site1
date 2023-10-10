<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
            margin-top: 0%;
            padding: 5% 5%;
            width: 50%;
            
        }
    </style>
    <title>Site 1</title>
</head>
<body>
    <?php

    include 'banco.php';
    if(!isset($_GET['editar'])):
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div class="container">
<img src="images/img1.jpg" class="img-fluid" alt="imagem">
    <form action="cmd_inserir_jogo.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nome da imagem do Jogo</label>
            <input type="text" name="img_jogo" class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <input type="text" name="nome_jogo" class="form-control" placeholder="Qual o nome do Jogo?!">
        </div>
        <div class="mb-3">
            <label class="form-label">Descreva o Jogo em uma frase</label>
            <input type="text" class="form-control" name="descricao_jogo">
        </div>
        <label class="form-label">Sobre Jogo</label>
<div class="mb-3">
<textarea class="form-control" row="7" cols="50" name="sobre_jogo"></textarea></div>


        <button type="submit" class="btn btn-success">Criar</button>
            </form>

</div>
<?php
else:
?>

<?php while ($linha = mysqli_fetch_array($consulta_jogos)): ?>

    <?php if($linha['ID_JOGO'] == $_GET['editar']): ?>
        <div class="container">
        <img src="images/<?php echo $linha['IMG_JOGO']?>" class="img-fluid" style="border-radius:5%;" alt="imagem">
            <form action="cmd_edita_jogo.php" method="post" style="padding:7% 0 0;">
            <input type="hidden" name="id_jogo" value="<?php echo $linha['ID_JOGO']; ?>">
                <div class="mb-3">
                    <label class="form-label">Nome da imagem do Jogo</label>
                    <input type="text" name="img_jogo" class="form-control" value="<?php echo $linha['IMG_JOGO']; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" name="nome_jogo" class="form-control" placeholder="Qual o nome do Jogo?!" value="<?php echo $linha['NOME_JOGO']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descreva o Jogo em uma frase</label>
                    <input type="text" class="form-control" name="descricao_jogo" value="<?php echo $linha['DESCRICAO_JOGO']; ?>">
                </div>
                <div class="mb-3">
                <label class="form-label">Sobre Jogo</label>

                <textarea class="form-control" row="7" cols="50" name="sobre_jogo"><?php echo $linha['SOBRE_JOGO'];?></textarea></div>
                <button type="submit" class="btn btn-warning">Atualizar</button>
                    </form>

        </div>
        <?php
        endif;
     endwhile; ?>
<?php endif;
?>

</body>
</html>