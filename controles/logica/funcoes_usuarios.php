<?php

 function acessarUsuario($conexao,$array){
        try {
        $query = $conexao->prepare("select * from usuarios where email=? and senha=? ");
        if($query->execute($array)){
            $usuario = $query->fetch();
          if ($usuario)
            {  
                
                return $usuario;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }

 function verificaEmail($conexao,$array)   {
    try{
        $query = $conexao->prepare("select * from usuarios where md5(email) = ? ");
        if($query->execute($array)){
            $usuario = $query->fetch();
          if ($usuario)
            {  
                
                return $usuario;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

 }

 function alteraStatus($conexao, $array){
    try{
        $query = $conexao->prepare("update usuarios set status=1 where codusuario = ?");
        $resultado =  $query->execute($array);
    
        return $resultado;
      } catch(PDOException $e){
           echo 'Error: ' . $e->getMessage();
      }
    } 

function cadastrarUsuario($conexao, $array){
        try{
            $query = $conexao->prepare("insert into usuarios (nomeusuario, telefone, sexo, idade, email, cpf, cep, cidade, senha)
            values (?, ?, ?, ?, ?, ?, ? , ? , ?)");
            $resultado = $query->execute($array);

            return $resultado;

        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

    }

function listarUsuarioPorCod($conexao,$array){ 
        try {
          $query = $conexao->prepare("SELECT * FROM usuarios WHERE codusuario=?");      
          $query->execute($array);
          $pets = $query->fetch();
          return $pets;
    
        }catch(PDOException $e) {
              echo 'Error: ' . $e->getMessage();
        } 
     } 
    
function alterarUsuario($conexao, $array){
        try {
            $query = $conexao->prepare("update pessoa set nome= ?, email = ?, cpf= ?, senha= ? where codpessoa = ?");
            $resultado = $query->execute($array);   
            return $resultado;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
?>