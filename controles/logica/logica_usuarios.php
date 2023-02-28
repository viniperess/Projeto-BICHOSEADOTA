<?php
 require_once('conecta.php');
 require_once('funcoes_usuarios.php');
 require_once('funcoes_pet.php');
 include("../../envia_email.php");

 var_dump($_POST);

 if(isset($_POST['cadastrarusuario'])){
    $nomeusuario = $_POST['nomeusuario'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $senha=$_POST['senha'];
    

    $array = array($nomeusuario, $telefone, $sexo, $idade, $email, $cpf, $cep, $cidade, $senha);
    $resultado =  cadastrarUsuario($conexao, $array);
 
   
   if($resultado)
   {
             $hash= md5($email);
             $link="<a href='localhost/bichoseadota/valida_email.php?h=".$hash."'> Clique aqui para confirmar seu cadastro </a>";
             

              $mensagem.="Olá $nomeusuario, ficamos felizes com seu cadastro em nosso site, agora, por favor, valide o mesmo no link abaixo <br>".$link."";
              $assunto="Confirme seu cadastro";

              $resultado= enviaEmail($email,$nomeusuario,$mensagem,$assunto);
       

   }
   else
   {
          $_SESSION["msg"].= 'Erro ao inserir <br>';
   }		

    header('location:../../login.php');
   
}

#LOGAR USUARIO
if(isset($_POST['entrar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $array = array($email,$senha);
   
     $usuario = acessarUsuario($conexao,$array); 
     
     
          
    if($usuario){ 
            session_start();
        
            $_SESSION['logado'] = true;
            $_SESSION['codusuario'] = $usuario['codusuario'];
            header('location:../../index.php');
         }
         else{
            echo "Usuario inválido!";
            header('location:../../login.php');
         }
         
        
    }
    else{
       echo "Usuário inválido!!";
       
    }
 

if(isset($_GET['sair'])){
            
    session_start();
    session_destroy();

    header('location:../../index.php');
} 

if(isset($_POST['alterar'])){
    
    $codusuario = $_POST['codusuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];    
    $array = array($nome, $email, $cpf, $senha, $codusuario);
    alterarUsuario($conexao, $array);

    header('location:../../index.php');
}


 ?>