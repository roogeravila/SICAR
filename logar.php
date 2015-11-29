<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>

<?php
// inclui o arquivo de configura��o do sistema
include "Config/config_sistema.php";
// recebe dados do formulario
$login = $_POST["usuario"];
$senha = $_POST["senha"];


// verifica se o usuario existe
$consulta = mysql_query("select * from usuario where login='$login'");
$campos = mysql_num_rows($consulta);

if($login == $login_admin) {
			if($senha == $senha_admin) {
				session_start();
				$_SESSION['login_usuario'] = $login_admin;
				$_SESSION['senha_usuario'] = $senha_admin;
			
				// redireciona o link para uma outra pagina
				header("Location: SICAR - PC (Administrador)/inicio.html");
			}
			}
// Buscando usuários (Diretor,Secretário e Bolsista)
if($campos != 0) {
// se o usuario existi verifica a senha dele
	
	if($senha != mysql_result($consulta,0,"senha")) {
		echo "<font color=red><b>
			  Erro ao Logar!
			  <script> setTimeout() </script>
			  </font></b>";
		exit;
	} else {
			// se o login nao for do administrado vamos criar a sess�o dele
			session_start();
			$_SESSION['login_usuario'] = $login;
			$_SESSION['senha_usuario'] = $senha;
			
			if((mysql_result($consulta,0,"cargo"))==1) // Buscando pelo Diretor
			header("Location: SICAR - PC (Direcao)\inicio.php?login=$login");
			
			if((mysql_result($consulta,0,"cargo"))==2) // Buscando pelo Secretario
			header("Location: SICAR - PC (Secretaria)\inicio.php?login=$login");
			
			if((mysql_result($consulta,0,"cargo"))==0) // Buscando pelo Bolsista
			header("Location: SICAR - PC (Bolsista)\inicio.php?login=$login");
		}
} else {
	echo "<font color=red><b>
		 Erro ao Logar!
		  <script> setTimeout() </script>
		  </font></b>";
	exit;
}


?>
</body>
</html>