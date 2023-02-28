<?php

include_once('controles/logica/conecta.php');
include_once('controles/logica/funcoes_pet.php');
?>

<?php   $pets = listarPet($conexao); ?>

<?php
        foreach($pets as $pet){
                
    ?>               
                     <section>
                        <p>Nome: <?php echo $pet['nomepet']; ?></p>
                        <p>Raça: <?php echo $pet['raça']; ?></p>
                        <p>Sexo: <?php echo $pet['sexo']; ?></p>
                        <p>cidadepet: <?php echo $pet['cidadepet']; ?></p>
                        <p>Porte: <?php echo $pet['porte']; ?></p>
                        <p>idade: <?php echo $pet['idade']; ?></p>

                          <!-- <form method='post' action='logica_pet.php'  enctype='multipart/form-data'>
                            <input type='file' name='files[]' multiple />
                            <input type='submit' value='Submit' name='submit' />
                        </form>
                         <p>Foto: <input type= "file" name= "arquivo"><input type="submit" name="imagem" value="Enviar"></p> --> 
                         
                         <br><br>    
                             <form action="controles/logica/logica_pet.php" method="post">
                                 <button type="submit" name="editar" value="<?php echo $pet['codpet']; ?>"> Editar </button>
                                 <button type="submit" name="deletar" value="<?php echo $pet['codpet']; ?>"> Deletar </button> 
                             </form>
                         <br><br>                                                          
                     </section>
                     <?php                    
 }
 ?> 