<?php
session_start();
include("controles/logica/conecta.php");
include("controles/logica/funcoes_usuarios.php");
if($_GET['h']){
	$h=$_GET['h'];
	

	$array = array($h);
    
	$usuario = verificaEmail($conexao,$array);
    
	if($usuario)
	{

		$array=array($usuario['codusuario']);

		$resultado =alteraStatus($conexao, $array);
		
		if($resultado)
		{
			
                // echo 'deu bom';
				header('location:../bichoseadota/login.php'); 
		}
		else
		{ echo 'deu ruim1';
			   $_SESSION["msg"]= 'Problema na validação';
			   
		}	
	}

	else
	{
        echo 'deu ruim2';
		$_SESSION["msg"]= 'Problema na validação';
	}	
	
    header('location:../bichoseadota/login.php'); 
	
}
