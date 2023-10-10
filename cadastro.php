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
            padding: 0 5%;
            width: 50%;
        }
    </style>
    <title>HardGames</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div class="container">
<img src="images/img1.jpg" class="img-fluid" alt="imagem">
    <form action="cmd_cadastro.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nome Completo</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <input type="text" name="user_name" class="form-control" placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">senha</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-success">Cadastrar-se</button>
            </form>

</div>

</body>
</html>