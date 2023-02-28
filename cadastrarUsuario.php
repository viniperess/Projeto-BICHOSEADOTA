<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="validacao.js"> </script>
    <!-- <script src="funcoes_ajax.js"> </script> -->
    <link rel="stylesheet" href="estilo/style.css">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link rel="icon" href="./imagens/2-removebg-preview-reduzido.png">
    <title>Bichoseadota</title>
</head>
<body class="loginbg">
    
<div class="container col-xl-10 col-xxl-8 px-4 py-5 ">
    <div class="mt-5 ">
      
      <div class="col-md-6 mx-auto col-5 mt-5 "  >
        <form id="cadastro" action="controles/logica/logica_usuarios.php" method="post" class="p-4 p-md-5 border rounded-3 ">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nomeusuario" id="nomeusuario" >
            <label for="nomeusuario">Nome </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="telefone" id="telefone" >
            <label for="telefone">Telefone </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="sexo" id="sexo" >
            <label for="sexo">Sexo </label>         
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="idade" id="idade" >
            <label for="idade">Idade </label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="email" >
            <label for="email">Email </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="cpf" id="cpf" >
            <label for="cpf">CPF </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="cep" id="cep" >
            <label for="cep">CEP </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="cidade" id="cidade"  >
            <label for="cidade">Cidade </label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="senha" id="senha" >
            <label for="senha">Senha</label>
          </div>
          
          <button class="w-100 btn btn-md btn-primary" type="submit"
          id='cadastrarusuario' name='cadastrarusuario' value="Cadastrar">Cadastrar</button>
          <hr>
            
          
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