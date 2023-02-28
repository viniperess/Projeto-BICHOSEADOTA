<?php

 function listarPet($conexao){ 
    try {
      $query = $conexao->prepare("SELECT * FROM pets WHERE status=false");      
      $query->execute();
      $pets = $query->fetchAll();
      return $pets;

    }catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
    } 
 } 

 function pesquisarPet($conexao,$array){
        try {
        $query = $conexao->prepare("select * from pets where raça like ? and status=false");
        if($query->execute($array)){
            $pets = $query->fetchAll(); 
            return $pets;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
    
function cadastrarPet($conexao,$array){
  try {
       $query = $conexao->prepare("insert into pets (nomepet, raça, sexo, cidadepet, porte, idade, castrado, imagem, codusuario) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $resultado = $query->execute($array);
       
       return $resultado;
       
   }catch(PDOException $e) {
       echo 'Error: ' . $e->getMessage();
   }

}


function alterarPet($conexao, $array){//////////////////////////////////////
    try {
        $query = $conexao->prepare("update pets set nomepet = ?, raça = ?, sexo= ?, cidadepet = ?, porte = ?, idade = ? where codpet = ?");
        $resultado = $query->execute($array);   
  
        return $resultado;
        
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
  }
 
function buscarPet($conexao,$array){
    try {
    $query = $conexao->prepare("select * from pets where codpet=?");
  
    if($query->execute($array)){
        $pet = $query->fetch(); 
        return $pet;
    }
    else{
        return false;
    }
     }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
  }  
  
  }

function deletarPet($conexao, $array){
    try {
        $query = $conexao->prepare("delete from pets where codpet = ?");
        $resultado = $query->execute($array);   
  
         return $resultado;
  
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
  
  }


function listarPetporCod($conexao,$array){ 
    try {
      $query = $conexao->prepare("SELECT * FROM pets WHERE codpet=?");      
      $query->execute($array);
      $pets = $query->fetch();
      return $pets;

    }catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
    } 
 } 

 function listarAdocoesporCod ($conexao, $array){

  try{
      $query = $conexao->prepare("select pets.nomepet, pets.raça, pets.imagem, usuarios.nomeusuario, adocao.codadocao from pets  join usuarios USING (codusuario) join adocao using(codpet) WHERE codcuidador =?;");
      $query->execute($array);
      $resultado = $query->fetchAll();
      return $resultado;
  } catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
  }
 }


function registrarAdocao($conexao,$array){
  try{
    $query = $conexao->prepare("INSERT INTO adocao (motivo, codpet, codcuidador) VALUES (?,?,?)");
    $resultado =  $query->execute($array);

    return $resultado;

  } catch(PDOException $e){
      echo 'Error: ' . $e->getMessage();
  }
} 

function alterarStatus($conexao,$array){
  try{
    $query = $conexao->prepare("update pets set status=true WHERE codpet=?");
    $resultado =  $query->execute($array);

    return $resultado;
  } catch(PDOException $e){
       echo 'Error: ' . $e->getMessage();
  }
}
?>
