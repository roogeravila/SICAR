<?php
//Variaveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$Faculdade = $_POST['Faculdade'];
$Protocolo = $_POST['Protocolo'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// -------------

// Compo E-mail

	
	$arquivo = "
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
	font-size:12px;
	color: #666666;
	}
	a{
	color: #666666;
	text-decoration: none;
	}
	a:hover {
	color: #FF0000;
	text-decoration: none;
	}
	</style>
    <html>
    


        // aqui entra o corpo do aqruivo mensagem.html 

        <html>
        <meta charset="utf-8">
        <h2> SICAR - Sistema de Cadastro e Acompanhamento de Requisições </h2>
        <?php

        $nome = "Roger";
        $data_envio = date("d-m-Y");
        $id_protocolo = 01;
        $ano = date("Y");
        $Protocolo = $ano.$id_protocolo; 
         printf('<h3> Olá  - '.$nome.'<p>Seu Numero de Protocolo é: '.$Protocolo.'</h3><p>Este email foi enviado em '.$data_envio.'') ;
        
        
        

          ?>
        
        
    </html>
        
        
    </html>
	";

// -------------------------

//enviar
	
	// emails para quem será enviado o formulário
	$destino = $email;
	$assunto = "Sicar - Numero de Protocolo";

	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $mensagem, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O protocolo de acompanhamento será enviado para o e-mail fornecido no formulário";
	echo " <meta http-equiv='refresh' content='3;URL=contato.php'>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>