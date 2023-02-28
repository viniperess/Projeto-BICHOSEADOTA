<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['enviar'])) 
{
	
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];
$email_resposta = $_POST['email_resposta'];

require "PHPMailer copy/src/PHPMailer.php";
require "PHPMailer copy/src/SMTP.php";


// instanciando a classe
$mail = new PHPMailer();

// habilitando SMTP	
$mail->isSMTP();

// habilitando tranferêcia segura 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// Pode ser: 0 = não exibe erros, 1 = exibe erros e mensagens, 2 = apenas mensagens	

$mail->SMTPDebug = 0; // Debug

// habilitando autenticação	
$mail->SMTPAuth = true;

// Configurações para utilização do SMTP do Gmail 

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587; // porta gmail
$mail->SMTPOptions = [
     'ssl' => [
         'verify_peer' => false,
         'verify_peer_name' => false,
         'allow_self_signed' => true,
    ]
];

$mail->Username = 'dawexemplo2014@gmail.com'; ////Usuário para autenticação 
$mail->Password = 'aoetyorrmrnknqdq'; //senha autenticação

// Remetente da mensagem - sempre usar o mesmo usuário da autenticação  
$mail->setFrom('dawexemplo2014@gmail.com' , 'Duvidas BICHOSEADOTA');

// Endereço de destino do email
$mail->addAddress('gabriel--fiss@hotmail.com',);

$mail->CharSet = "utf-8";

// Endereço para resposta
	
$mail->addReplyTo($email_resposta);

// Assunto e Corpo do email
$mail->Subject = $nome;

$mail->Body = $mensagem;


if (!$mail->send()) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } 

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="funcoes_ajax.js"> </script>
    <!-- <script src="validaContato.php"></script> -->
     <!-- CSS BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/css/all.css"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="icon" href="./imagens/2-removebg-preview-reduzido.png">
    <title>Bichoseadota</title>
</head>
<nav class="navbar bg-warning">
  <div class="container-fluid me-2">
    <a class="navbar-brand" href="index.php">
        <img src="./imagens/2-removebg-preview-reduzido.png" class="img w-25 h-25 ms-3" alt="logo" >
    </a>
    
      <form action="controles/logica/logica_usuarios.php" method="post" class="d-flex" >
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
      <input type="submit" class="btn btn- me-2" name="sair" value="Sair"></a>
      <?php
       }
        ?>
      <a class="btn btn- me-2" href="contato.php" role="button">Contato</a>
    </form>
    </div>
  </div>
</nav>
<body>
    
    <section class="section">
        <div class="columns">      
            </div>
            <div class="column">
                <form action="contato.php" method="post">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title"> Contato</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                         <div class="field">
                                <label class="label" >Nome</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Digite seu nome" name="nome"   </a>      
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" >Email</label>
                                <div class="control">
                                    <input class="input" type="email" placeholder="Digite seu email" name="email_resposta"  </a>    
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">CEP</label>
                                <div class="control">
                                <input class="input" type="text" placeholder="Digite seu cep" name="cep" id="cep" </a>  
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Cidade</label>
                                <div class="control">
                                <input class="input" type="text"  name="cidade" id="cidade"</a>    
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Mensagem</label>
                                <div class="control">
                                    <textarea class="textarea" placeholder="Mensagem" name="mensagem"></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-info" name="enviar">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>



     <!-- SCRIPT BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous">
    </script>
</body>

</html>