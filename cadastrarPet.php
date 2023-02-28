<?php 
session_start();
if(!isset($_SESSION['logado']))
{
	header('location:login.php');    
} 

?>
<link rel="stylesheet" href="estilo/style.css">
<script src="validacaoPets.js"></script>
<!-- CSS BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link rel="icon" href="./imagens/2-removebg-preview-reduzido.png">
    <title>Bichoseadota</title>
<style>
        .container{
            width: 25rem; 
            border: 1px solid purple; 
            border-radius: 4%;
            justify-content: center;           
        }
    </style>
</head>
<body>
<nav class="navbar bg-warning">
  <div class="container-fluid me-2">
    <a class="navbar-brand" href="index.php">
        <img src="./imagens/2-removebg-preview-reduzido.png" class="img w-25 h-25 ms-3" alt="logo" >
    </a>
    
      <form action="controles/logica/logica_usuarios.php" method="post" class="d-flex" >
      <?php
       if(!isset($_SESSION['codusuario'])){     
       ?>
      <a class="btn btn- me-2" href="login.php" role="button">Entrar</a>
      <?php
       }
       ?>
      <?php
       if(isset($_SESSION['codusuario'])){     
         ?>
      <a class="btn btn- me-2" href="cadastrarPet.php" role="button">Cadastrar</a>
      <input type="submit" class="btn btn- me-2" name="sair" value="Sair"></a>
      <?php
       }
        ?>   
      <a class="btn btn- me-2" href="contato.php" role="button">Contato</a>
    </form>
    </div>
  </div>
</nav>
<main>
<!-- <?php
       if(isset($_SESSION['codusuario'])){     
    ?>
        <h3>Cliente logado: <?php echo $_SESSION['codusuario']; ?>  </h3>
    <?php
   
       }
    ?> -->
<div class="container mt-3 mb-3 pt-5 p-3 d-flex">
    <form id="cadastro" action="controles/logica/logica_pet.php" enctype='multipart/form-data' method="post">
        <div class="mb-3">
          <label for="nomepet" class="form-label">Nome</label>
          <input type="text" class="form-control" name="nomepet" id="nomepet" >   
        </div>
        <div class="mb-3">
          <label for="raça" class="form-label">Raça</label>
          <input type="text" class="form-control" name="raça" id="raça" >
        </div>
        <div class="mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <input type="text" class="form-control" name="sexo" id="sexo" ></p> 
        </div>
        <div class="mb-3">
        <label for="cidadepet" class="form-label">Cidade</label> 
        <input type="text" class="form-control" name="cidadepet" id="cidadepet" >
        </div>
        <div class="mb-3">
        <label for="porte" class="form-label">Porte</label> 
        <input type="text" class="form-control" name="porte" id="porte" >
        </div>
        <div class="mb-3">
        <label for="idade" class="form-label">Idade</label> 
        <input type="text" class="form-control" name="idade" id="idade" >
        </div>
        <div class="mb-3">
        <label for="castrado" class="form-label">Castrado</label> 
        <input type="text" class="form-control" name="castrado" id="castrado" >
        </div>
        <div class="mb-3">
    
          Imagem:<input type="file" name="arquivo" id="arquivo" >
        </div>
        <input type="hidden" id='codusuario' name='codusuario' value="<?php echo $_SESSION['codusuario']; ?>">
        <button type="submit" class="btn btn-primary" id='cadastrarpet' name='cadastrarpet' value="Cadastrar">
          Cadastrar</button>
    </form>
   </div>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous">
    </script>
</main>
<!-- <?php require('includes/componentes/footer.php');?> -->
</body>
</html>
