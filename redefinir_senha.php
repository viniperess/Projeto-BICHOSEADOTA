<?php
    include_once('conecta.php');
    session_start();
    $email =  $_GET['email'];

    $array = array($email);

    $resultado = ConsultaSelect($query,$array);
    
    if($resultado['token'] == $token){
     ?>
        <form action = "controllers/controller_usuario.php" method="post">
             <label for="senha">Informe a senha nova:</label>
                <input type="text" name="senha">
                <input type="hidden" name="email" value="<?php echo $email?>"><br>
                <input type="submit" value="Renovar" name="botao">
        </form>
     <?php
    }
    else
        echo "Link invalido para alteração de senha"
?>

