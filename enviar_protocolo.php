﻿<?php
//Variaveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$Faculdade = $_POST['Faculdade'];
$Protocolo = $_POST['Protocolo'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


		$nome = "Roger";
        $data_envio = date("d-m-Y");
        $id_protocolo = 01;
        $ano = date("Y");
        


//select max(id_faculdade) from faculdade;



	// Conexão com o Banco de Dados
	$banco = mysqli_connect("localhost","root","") or die (mysql_error ());

	// Seleciona o Banco de Dados
	 mysqli_select_db($banco,"bdsicar") or die("Erro ao Selecionar Base de dados".mysql_error());
	//query SQL
	
	$comando = "SELECT max (id_faculdade) FROM faculdade " ;

	// Executa a query (o recordset $id contém o resultado da query, no caso o maior id do banco)
	$id = mysqli_query($banco,$comando);// result recebe o resultado da consulta
	 // $linhas = mysqli_num_rows($result); //linhas recebe a quantidade de elementos da consulta result
	$Protocolo = $ano.$id; 	
		


// -------------

// Compor E-mail

	

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
        

        
         printf('<h3> Olá  - '".$nome."'<p>Seu Numero de Protocolo é: '".$Protocolo."'</h3><p>Este email foi enviado em '".$data_envio."'') ;
        
        
        

        
        
    
        
        
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
	echo " <meta http-equiv='refresh' content='3;URL=NovoRequerimento.php'>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>