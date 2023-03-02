<!DOCTYPE html>
<html class="all" lang="en">

<?php
session_start();
include_once('controles/logica/funcoes_pet.php');
include_once('controles/logica/conecta.php');

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagens/2-removebg-preview-reduzido.png">
    <link rel="stylesheet" href="estilo/style.css">
    <script src="funcoes_ajax.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/css/all.css"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Bichoseadota</title>
        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
      
</head>
<body>
<nav class="navbar bg-warning">
  <div class="container-fluid me-2">
    <a class="navbar-brand" href="index.php">
        <img src="./imagens/2-removebg-preview-reduzido.png" class="img w-25 h-25 ms-3" alt="logo" >
    </a>
    
      <form action="#" method="post" class="d-flex" >
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
      <a class="btn btn- me-2" href="controles/logica/logica_usuarios.php?sair=true" role="button">Sair</a>
      <a class="btn btn- me-2" href="perfil.php" role="button">Perfil</a>
      <?php
       }
        ?>
      
      <a class="btn btn- me-2" href="contato.php" role="button">Contato</a>
      
        <input class="form-control me-2" type="text" placeholder="Digite a raça do pet" name="raça" id="raça">
        <button class="btn" type="submit"  name="pesquisar" id="pesquisar" style="background-color: #472478; color:white;">Pesquisar</button>
       
    </form>
    </div>
  </div>
</nav>
    
    <div class="main_content">
     <!-- <?php
       if(isset($_SESSION['codusuario'])){     
    ?>
        <h3>Cliente logado: <?php echo $_SESSION['codusuario']; ?>  </h3>
    <?php
       }
    ?>  -->
    <div class="container-fluid">
    <section class="display-6 d-flex justify-content-center py-3" style="color:#472478;">  <em>Venha conhecer nossos pets </section>

    </div>
    <?php
       
         if(isset($_POST['pesquisar'])){
            $raça = $_POST['raça'];
            $array = array('%'.$raça.'%');
            $pets =  pesquisarPet($conexao,$array);
         }
         else
         {
            $pets = listarPet($conexao);
         }
        if(empty($pets)){
            ?>
                <section>
                    <p>Não há pets disponíveis.</p>
                </section>

                
            <?php
            
        }
        
        foreach($pets as $pet){
                 
            ?>
            <div class="carrega">
            <section style="float: left;" class="d-flex ms-2 mt-3 ">
            <div class="col-auto coll">        
                <div style="text-align:center; " class="container">     
                    <div class="card" style=" width: 220px; box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.2);">      
                        <img style="height:250px; " src="imagens/<?php echo $pet['imagem'];?>" class=" card-img-top" alt="pet">
                        <div class="card-body">
                            <h3 style="color: #472478" class="card-title display-6">
                                <p><?php echo $pet['nomepet']; ?></p>
                            </h3>
                                <p style="font-size: 12px;" class="card-text">
                                    <p><?php echo $pet['raça']; ?>
                                </p>  
                                     <form action="adotarPet.php" method="post">
                                         <input type="hidden" id="codpet" name="codpet" value="<?php echo $pet['codpet']; ?>">
                                         <button type="submit" name="adotar" class="btn btn-warning btn-sm" > Conheça-me </button>
                                    
                                    </form> 
                         </div>                 
                    </div>
                </div>
            </div>
        </div>
             </section>

            
                
            <?php
        }
    
     
    ?>
    
    </div>
    <footer class="col-12 coll d-flex">       
        <img src="./imagens/banner2.1.png" class="img mt-3 w-100" >
    </footer>
    




    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous">
    </script>
</body>
</html>