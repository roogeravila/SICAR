<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title</title>
</head>

<body>
<?php
include "../Config/config_sistema.php";
		$id=$_GET["id"];
		$del = "DELETE FROM faculdade WHERE id_faculdade =".$id;
		$deletado = mysql_query($del) or die('Erro ao deletar');
		header("Location: listar_faculdade.php");
?>


</body>
</html>