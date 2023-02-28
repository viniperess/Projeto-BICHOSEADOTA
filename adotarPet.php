<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagens/2-removebg-preview-reduzido.png">
    <title>Bichoseadota</title>
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/css/all.css"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">    
</head>
<body>
<?php 
include_once('controles/logica/funcoes_pet.php');
require('controles/logica/conecta.php');

$array = array($_POST['codpet']);
$pet = listarPetporCod($conexao, $array);

?>
<nav class="navbar bg-warning">
  <div class="container-fluid me-2">
    <a class="navbar-brand" href="index.php">
        <img src="./imagens/2-removebg-preview-reduzido.png" class="img w-25 h-25 ms-3" alt="logo" >
    </a>
    
      <form action="#" method="post" class="d-flex" >
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
       
    </form>
    </div>
  </div>
</nav>


    <section  style="float: left; " class="d-flex">
            <div class="col-auto coll mt-6">        
                <div  class="container  mt-3 ms-5 mb-4">     
                    <div  class="card" style=" width: 300px; box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.2);">      
                        <img style="height:300px; " src="imagens/<?php echo $pet['imagem'];?>" class="card-img-top" alt="pet">
                         <div class="card-body">
                            <h3 style="text-align:center; color: #472478" class="card-title display-6 "><p><?php echo $pet['nomepet']; ?></p></h3>
                                <p class="card-text ">
                                <p>Raça: <?php echo $pet['raça']; ?></p>  
                                <p>Sexo: <?php echo $pet['sexo']; ?></p>
                                <p>Cidade: <?php echo $pet['cidadepet']; ?></p> 
                                <p>Porte: <?php echo $pet['porte']; ?></p>    
                                <p>Idade: <?php echo $pet['idade']; ?></p>  
                                <p>Castrado: <?php echo $pet['castrado']; ?></p> 
                                </p> 
                                 <form action="adotarPet.php" method="post">
                                    <input type="hidden" id="codpet" name="codpet" value="<?php echo $pet['codpet']; ?>">
                                    <input type="hidden" id="codusuario" name="codusuario" value="<?php echo $pet['codusuario']; ?>">                                                       
                                </form>
                         </div>                  
                     </div>
                  </div>
             </div>


    </section>
    <?php
       if(isset($_SESSION['codusuario'])){     
    ?>
    <section class="section">
            <div class="column">
                <form action="controles/logica/logica_pet.php"" method="post">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title"> Solicitar adoção</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <div class="field">
                                <label class="label">Motivo da adoção</label>
                                <div class="control">
                                    <textarea class="textarea" placeholder="Digite aqui" name="motivo" id="motivo"></textarea>
                                </div>
                            </div>
                            <div class="field is-grouped">
                                <div class="control">
                                    <input type="hidden" id="codpet" name="codpet" value="<?php echo $pet['codpet']; ?>">
                                    <input type="hidden" id="codusuario" name="codusuario" value="<?php echo $_SESSION['codusuario']; ?>">
                                    <button style="background-color:#472478; color:white;" class="button" name="solicitar" id="solicitar">Solicitar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <?php
       }    
    ?>
     <?php
       if(!isset($_SESSION['codusuario'])){          
    ?>
    <section class="section">
            <div class="column">
                <form action="controles/logica/logica_pet.php"" method="post">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title"> Faça login para prosseguir com o processo de adoçao</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <div class="field">
                            <a class="btn btn- me-2" href="login.php" role="button"  style="background-color:#472478; color:white;">Entrar</a>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
         <?php
          }
          ?>   




<!-- SCRIPT BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous">
    </script>
</body>

</html>