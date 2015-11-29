

<?php

// Inclui o arquivo de configuração do sistema (Conexão com o Banco de Dados)
include "../Config/config_sistema.php";




// Receber dados do Formulário --Novo Requerimento--

$req_id;
$req_protocolo;
$req_faculdade = $_POST['req_faculdade'];
$req_tipo=$_POST['req_tipo'];
$req_nome =$_POST['req_nome'];
$req_matricula =$_POST['req_matricula'];
$req_email =$_POST['req_email'];
$req_cpf =$_POST['req_cpf'];
$req_telefone =$_POST['req_telefone'];
$req_observacao =$_POST['req_observacao'];
$req_end_anexo="";
$req_anexo_nome = $_FILES['req_anexo']['name'];
$arqTemp = $_FILES['req_anexo']['tmp_name'];
$arqError = $_FILES['req_anexo']['error'];
$req_status= 1;



// Atribuindo Protocolo para este Requerimento
$data = date('dmy');
$hora = date('His');
$req_protocolo =  $data.$hora;

// Salva Anexo e Busca o endereço

// Salvar o Anexo
if ($arqError == 0) {
    $pasta = "C:/xampp/htdocs/SICAR/SICAR - PC (Administrador)/novo_Requerimento/anexos/anexos/";
    $upload = move_uploaded_file($arqTemp, $req_anexo_nome);
	$req_end_anexo = $req_anexo_nome;
  }
 // $end_antigo =$req_anexo_nome;
 //$end_novo = $req_protocolo;
 //rename($end_antigo,$end_novo);
  

  
//Salvando Informações no Banco de Dados
$query = mysql_query("INSERT INTO requerimento (req_protocolo,req_faculdade,req_tipo, req_nome,req_matricula,req_email,req_cpf,req_telefone,req_observacao,req_anexo) VALUES ('$req_protocolo','$req_faculdade','$req_tipo','$req_nome','$req_matricula','$req_email','$req_cpf','$req_telefone','$req_observacao','$req_end_anexo')") or die(mysql_error());


echo "Requerimento Enviado <br>" ;
echo "<a href='NovoRequerimento.php'>Retornar</a>"; 





?>