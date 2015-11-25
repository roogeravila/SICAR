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
$faculdade= $_POST['faculdade'];
$diretor = $_POST['diretor'];
$email= $_POST['email'];
$ramal = $_POST['ramal'];


// verifica se o usuario digitou o nome da Faculdade
if($faculdade == "") {
	echo "Digite a Faculdade!<br>";
	echo "<a href='cadastrar-faculdade.html'>Retornar</a>";
	exit;
} else {
	// se o usuario digitou o login ele verifica
	// se esta disponivel
	$consulta = mysql_query("select * from faculdade where nome = '$faculdade'");
	$linha = mysql_num_rows($consulta);
	if($linha != 0) {
		echo "Esta Faculdade já existe!<br>
			  Tente Outro!<br>";
	echo "<a href='cadastrar-faculdade.html'>Retornar</a>"; 
		exit;
	}
}

// faz consulta no banco para inserir os dados da Faculdade
$query = mysql_query("INSERT INTO faculdade (nome,diretor,email,ramal) VALUES ('$faculdade','$diretor','$email','$ramal')") or die(mysql_error());
echo "Cadastrado com Sucesso! <br>";
	echo "<a href='cadastrar-faculdade.html'>Retornar</a>";
?>

</body>
</html>
