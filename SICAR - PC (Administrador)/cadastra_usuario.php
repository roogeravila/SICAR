<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>

<body>
	<?php
// inclui o arquivo de configuração do sistema
include "../Config/config_sistema.php";

// recebe dados do formulario
$cargo= $_POST['cargo'];
$faculdade= $_POST['faculdade'];
$nome= $_POST['nome'];
$matricula= $_POST['matricula'];
$email= $_POST['email'];
$cpf= $_POST['cpf'];
$telefone= $_POST['telefone'];
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];

	$consulta = mysql_query("select * from usuario where CPF = '$cpf'");
	$linha = mysql_num_rows($consulta);
	if($linha != 0) {
		echo "CPF já existe!<br>
			  Tente Novamente!<br>";
	echo "<a href='cadastrar-usuarios.php'>Retornar</a>"; 
		exit;
	}


// faz consulta no banco para inserir os dados do usuário
$query = mysql_query("INSERT INTO usuario(cargo,faculdade,nome,matricula_ufpa,email,cpf,telefone,login,senha) VALUES ('$cargo','$faculdade','$nome','$matricula','$email','$cpf','$telefone','$usuario','$senha')") or die(mysql_error());
echo "Cadastrado com Sucesso! <br>";
	echo "<a href='cadastrar-usuarios.php'>Retornar</a>";
?>

</body>
</html>
