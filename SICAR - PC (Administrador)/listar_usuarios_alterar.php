<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
    
<title>Lista de Usuários</title>
</head>


<body>
<?php
include "../Config/config_sistema.php";
$sql="SELECT * FROM usuario WHERE cargo='0'";
$result = mysql_query($sql);




echo 'Listagem de Usuários - Bolsistas';
	
	echo '<table style="width:72%" border="0" >';
	echo '<tr bgcolor="#CCCCCC">
				<td style="width:1%"><center>ID</center></td>
				<td style="width:15%"><center>Nome</center></td>
				<td style="width:10%"><center>Faculdade</center></td>
				<td style="width:5%"><center>Matrícula/SIAPE</center></td>
				<td style="width:15%"><center>Email</center></td>
				<td style="width:10%"><center>Telefone</center></td>
				<td style="width:1%"><center>Ações</center></td>
			</tr>';
	
	while($row = mysql_fetch_array($result))
	{
		
		$faculdade=$row['faculdade'];


$sql_faculdade="SELECT * FROM faculdade WHERE id_faculdade='$faculdade'";
$result_faculdade = mysql_query($sql_faculdade);
$row_faculdade = mysql_fetch_array($result_faculdade);
		
	  echo "<tr>
				<td>".$row['id_usuario']."</td>
				<td>". $row['nome']. "</td>
				<td>". $row_faculdade['nome']. "</td>
				<td>". $row['matricula_ufpa']. "</td>
				<td>". $row['email']. "</td>
				<td>". $row['telefone']. "</td>
				<td>
				<center><a href=altera_dados_usuarios.php?id=".$row["id_usuario"]."><input class=art-button type=button cadastrar value=Editar> </input></a></center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  
	  echo '<br>';
	  $sql="SELECT * FROM usuario WHERE cargo='1'";
$result = mysql_query($sql);
echo '<br><br>Listagem de Usuários - Diretores';
	
		echo '<table style="width:72%" border="0" >';
	echo '<tr bgcolor="#CCCCCC">
				<td style="width:1%"><center>ID</center></td>
				<td style="width:15%"><center>Nome</center></td>
				<td style="width:10%"><center>Faculdade</center></td>
				<td style="width:5%"><center>Matrícula/SIAPE</center></td>
				<td style="width:15%"><center>Email</center></td>
				<td style="width:10%"><center>Telefone</center></td>
				<td style="width:1%"><center>Ações</center></td>
			</tr>';
	
	while($row = mysql_fetch_array($result))
	{
		
				$faculdade=$row['faculdade'];


$sql_faculdade="SELECT * FROM faculdade WHERE id_faculdade='$faculdade'";
$result_faculdade = mysql_query($sql_faculdade);
$row_faculdade = mysql_fetch_array($result_faculdade);
		
	  echo "<tr>
				<td>".$row['id_usuario']."</td>
				<td>". $row['nome']. "</td>
				<td>". $row_faculdade['nome']. "</td>
				<td>". $row['matricula_ufpa']. "</td>
				<td>". $row['email']. "</td>
				<td>". $row['telefone']. "</td>
				<td>
				<center><a href=altera_dados_usuarios.php?id=".$row["id_usuario"]."><input class=art-button type=button cadastrar value=Editar> </input></a> </center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  
	   echo '</table>';
	  
	  echo '<br>';
	  $sql="SELECT * FROM usuario WHERE cargo='2'";
$result = mysql_query($sql);
echo '<br><br>Listagem de Usuários - Secretários';
	
		echo '<table style="width:72%" border="0" >';
	echo '<tr bgcolor="#CCCCCC">
				<td style="width:1%"><center>ID</center></td>
				<td style="width:15%"><center>Nome</center></td>
				<td style="width:10%"><center>Faculdade</center></td>
				<td style="width:5%"><center>Matrícula/SIAPE</center></td>
				<td style="width:15%"><center>Email</center></td>
				<td style="width:10%"><center>Telefone</center></td>
				<td style="width:1%"><center>Ações</center></td>
			</tr>';
	while($row = mysql_fetch_array($result))
	{
		
				$faculdade=$row['faculdade'];


$sql_faculdade="SELECT * FROM faculdade WHERE id_faculdade='$faculdade'";
$result_faculdade = mysql_query($sql_faculdade);
$row_faculdade = mysql_fetch_array($result_faculdade);
		
	  echo "<tr>
				<td>".$row['id_usuario']."</td>
				<td>". $row['nome']. "</td>
				<td>". $row_faculdade['nome']. "</td>
				<td>". $row['matricula_ufpa']. "</td>
				<td>". $row['email']. "</td>
				<td>". $row['telefone']. "</td>
				<td>
				<center><a href=altera_dados_usuarios.php?id=".$row["id_usuario"]."><input class=art-button type=button cadastrar value=Editar> </input></a></center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  ?>
</body>
</html>

