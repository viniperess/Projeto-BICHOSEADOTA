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
include_once('controles/logica/funcoes_usuarios.php');
require('controles/logica/conecta.php');

$array = array($_SESSION['codusuario']);
$usuario = listarUsuarioPorCod($conexao, $array);

?>
<nav class="navbar bg-warning">
  <div class="container-fluid me-2">
    <a class="navbar-brand" href="index.php">
        <img src="./imagens/2-removebg-preview-reduzido.png" class="img w-25 h-25 ms-3" alt="logo" >
    </a>
    
      <form action="controles/logica/logica_usuarios.php" method="post" class="d-flex" >
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
<form action="controles/logica/logica_usuarios.php" method="post">
    <section style="float: left; " class="d-flex ">
            <div class="col-6-coll mt-6">        
                <div  class="container  mt-3 ms-5 mb-4 ">     
                    <div  class="card  border rounded-3"" style=" width: 300px; box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.2);">      
                         <div class="card-body">
                            <h3 style="text-align:center; color: #472478" class="card-title display-6 "><p><?php echo $usuario['nomeusuario']; ?></p></h3>
                                <p class="card-text ">
                                <p>Telefone:<?php echo $usuario['telefone']; ?></p>  
                                <p>Email: <?php echo $usuario['email']; ?></p> 
                                <p>CPF: <?php echo $usuario['cpf']; ?></p>    
                                <p>Cep: <?php echo $usuario['cep']; ?></p>  
                                <p>Cidade: <?php echo $usuario['cidade']; ?></p> 
                                
                                <input type="hidden" id='codpessoa' name='codpessoa' value="<?php echo $pessoa['codpessoa']; ?>">
                                </p> 
                                 
                                                                                   
                                
                         </div>                  
                     </div>
                  </div>
             </div>
             </form>

    </section>

    <?php 
        include_once('controles/logica/funcoes_pet.php');
        require('controles/logica/conecta.php');

        $array = array($_SESSION['codusuario']);
        $resultado= listarAdocoesPorCod($conexao, $array);

    ?>

    <?php
       foreach($resultado as $resultados){
               
    ?>  
            <div style="float:left;" class="column mt-5 ">
                <form action="controles/logica/logica_pet.php"" method="post">
                <div class="card mt-5">
                    <header class="card-header">
                        <p class="card-header-title justify-content-center"> Pet adotado</p>
                    </header>
                    <div class="card-content">
                    <img style="height:150px; width: 150px; " src="imagens/<?php echo $resultados['imagem']; ?>" class="card-img" alt="pet">
                        <div class="content">
                            <div class="field">
                            <p>Código de adoção: <?php echo $resultados['codadocao']; ?></p> 
                            <p>Raça: <?php echo $resultados['raça']; ?></p> 
                            <p>Pet: <?php echo $resultados['nomepet']; ?></p> 
                            <p>Cadastrado por: <?php echo $resultados['nomeusuario'];?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
  
       <?php                
        }             
        ?>
   
     <?php
       if(!$resultado){       
      ?>
        <section class="section">
                    <div class="column">
                        <form action="controles/logica/logica_pet.php"" method="post">
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title"> Você não adotou pets, adote um!</p>
                            </header>
                            <div class="card-content">
                                <div class="content">
                                    <div class="field">
                                    <a class="btn btn- me-2" href="index.php" role="button"  style="background-color:#472478; color:white;">Adoção</a>                                 
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