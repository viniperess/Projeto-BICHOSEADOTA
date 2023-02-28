<?php
 require_once('conecta.php');
 require_once('funcoes_pet.php');

 #CADASTRO PET
 if(isset($_POST['cadastrarpet'])){
    $nomepet = $_POST['nomepet'];
    $raça = $_POST['raça'];
    $sexo = $_POST['sexo'];
    $cidadepet = $_POST['cidadepet'];
    $porte = $_POST['porte'];
    $idade = $_POST['idade'];
    $castrado = $_POST['castrado'];
    $nome_arquivo=$_FILES['arquivo']['name'];  
    $tamanho_arquivo=$_FILES['arquivo']['size']; 
    $arquivo_temporario=$_FILES['arquivo']['tmp_name'];
    $codusuario = $_POST['codusuario'];

    if($nome_arquivo){ 
        if (move_uploaded_file($arquivo_temporario, "../../imagens/$nome_arquivo"))
        {
            echo " Upload do arquivo: ". $nome_arquivo." foi concluído com sucesso <br>";
            $array = array($nomepet, $raça, $sexo, $cidadepet, $porte, $idade, $castrado, $nome_arquivo,$codusuario );
            cadastrarPet($conexao, $array);
        }
    else
    {
        echo "Arquivo não pode ser copiado para o servidor.";
        
    
    }
}


    header('location:../../index.php');
   
}

if(isset($_POST['imagem'])){
    
    $nome_arquivo=$_FILES['arquivo']['name'];  
    $tamanho_arquivo=$_FILES['arquivo']['size']; 
    $arquivo_temporario=$_FILES['arquivo']['tmp_name']; 
    
    if (move_uploaded_file($arquivo_temporario, "../../imagens/$nome_arquivo"))
    {
        echo " Upload do arquivo: ". $nome_arquivo." foi concluído com sucesso <br>";
    }
    else
    {
        echo "Arquivo não pode ser copiado para o servidor.";
        $nome_arquivo='foto.png';
    
    }
    die;
    header('location:../../index.php');

}

#ALTERAR PET
if(isset($_POST['alterar'])){
    
    $codpet = $_POST['codpet'];
    $nomepet = $_POST['nomepet'];
    $raça = $_POST['raça'];
    $sexo = $_POST['sexo'];
    $cidadepet = $_POST['cidadepet'];
    $porte = $_POST['porte'];
    $idade = $_POST['idade'];

    $array = array($nomepet, $raça, $sexo, $cidadepet, $porte, $idade, $codpet);
    alterarPet($conexao, $array);
    header('location:../../area_adm.php');
}

#EDITAR PET
if(isset($_POST['editar'])){
    
    $codpet = $_POST['editar'];
    $array = array($codpet);

    $pet=buscarPet($conexao, $array);
    require_once('../../alterarPet.php');
}   


 #DELETAR PET
if(isset($_POST['deletar'])){
    $codpet = $_POST['deletar'];
    $array=array($codpet);

    deletarPet($conexao, $array);

    header('Location:../../area_adm.php');
} 

if(isset($_POST['solicitar'])){
    $motivo = $_POST['motivo'];
    $codpet = $_POST['codpet'];
    $codusuario = $_POST['codusuario'];
    
    $array=array($motivo, $codpet, $codusuario);

    registrarAdocao($conexao, $array);

    $array=array($codpet);
    
    alterarStatus($conexao, $array);

    header('location:../../index.php');


}


?>