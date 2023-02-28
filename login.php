<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link rel="icon" href="./imagens/2-removebg-preview-reduzido.png">
    <title>Bichoseadota</title>
</head>
<body class="cadastrobg">
    
<div style="border: 1px solid transparent" class="container col-xl-10 col-xxl-8 px-4 py-5 mt-3 ">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./imagens/2-removebg-preview-reduzido.png" class="d-flex ms-5" alt="logo" width="400" height="200" >
      </div>
      </div>
      <div class="col-md-10 mx-auto col-lg-5 ">
        <form action="controles/logica/logica_usuarios.php" method="post" class="p-4 p-md-5 border rounded-3 " >
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="email">Email </label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Password">
            <label for="senha">Senha</label>
          </div>
          
          <button class="w-100 btn btn-md btn-primary" type="submit" name="entrar" id="entrar" value="Entrar">Entrar</button>
          <hr>
          <p class="text-light">Não possui conta? Cadastre-se abaixo</p>
            <a class="btn btn-link " href="./cadastrarUsuario.php" role="button">Cadastro</a>          
        </form>
      </div>
    </div>
  </div>
  <!-- SCRIPT BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous">
    </script>
</body>
</html>