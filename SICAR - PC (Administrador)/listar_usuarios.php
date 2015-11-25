<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style_tabela.css" media="screen">

    
<title>Lista de Usuários</title>
</head>


<body>
<?php
include "../Config/config_sistema.php";
$sql="SELECT * FROM usuario WHERE cargo='0'";
$result = mysql_query($sql);
echo 'Listagem de Usuários - Bolsistas';
	
	echo '<table style="width:100%" border="1" >';
	echo '<tr>
				<td style="width:5%">ID</td>
				<td style="width:15%">Nome</td>
				<td style="width:15%">Faculdade</td>
				<td style="width:20%">Matrícula/SIAPE</td>
				<td style="width:15%">Email</td>
				<td style="width:10%">Telefone</td>
				<td style="width:10%">Ações</td>
			</tr>';
	
	while($row = mysql_fetch_array($result))
	{
	  echo "<tr>
				<td>".$row['id_usuario']."</td>
				<td>". $row['nome']. "</td>
				<td>". $row['faculdade']. "</td>
				<td>". $row['matricula_ufpa']. "</td>
				<td>". $row['email']. "</td>
				<td>". $row['telefone']. "</td>
				<td>
				<center><a href=apagar_user.php?id=".$row["id_usuario"]."><input class=art-button type=button cadastrar value=Apagar> </input></a></center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  
	  echo '<br>';
	  $sql="SELECT * FROM usuario WHERE cargo='1'";
$result = mysql_query($sql);
echo '<br><br>Listagem de Usuários - Diretores';
	
	echo '<table style="width:100%" border="1" >';
	echo '<tr>
				<td style="width:5%">ID</td>
				<td style="width:15%">Nome</td>
				<td style="width:15%">Faculdade</td>
				<td style="width:20%">Matrícula/SIAPE</td>
				<td style="width:15%">Email</td>
				<td style="width:10%">Telefone</td>
				<td style="width:10%">Ações</td>
			</tr>';
	
	while($row = mysql_fetch_array($result))
	{
	  echo "<tr>
				<td>".$row['id_usuario']."</td>
				<td>". $row['nome']. "</td>
				<td>". $row['faculdade']. "</td>
				<td>". $row['matricula_ufpa']. "</td>
				<td>". $row['email']. "</td>
				<td>". $row['telefone']. "</td>
				<td>
				<center><a href=apagar_user.php?id=".$row["id_usuario"]."><input class=art-button type=button cadastrar value=Apagar> </input></a> </center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  
	   echo '</table>';
	  
	  echo '<br>';
	  $sql="SELECT * FROM usuario WHERE cargo='2'";
$result = mysql_query($sql);
echo '<br><br>Listagem de Usuários - Secretários';
	
	echo '<table style="width:100%" border="1" >';
	echo '<tr>
				<td style="width:5%">ID</td>
				<td style="width:15%">Nome</td>
				<td style="width:15%">Faculdade</td>
				<td style="width:20%">Matrícula/SIAPE</td>
				<td style="width:15%">Email</td>
				<td style="width:10%">Telefone</td>
				<td style="width:10%">Ações</td>
			</tr>';
	
	while($row = mysql_fetch_array($result))
	{
	  echo "<tr>
				<td>".$row['id_usuario']."</td>
				<td>". $row['nome']. "</td>
				<td>". $row['faculdade']. "</td>
				<td>". $row['matricula_ufpa']. "</td>
				<td>". $row['email']. "</td>
				<td>". $row['telefone']. "</td>
				<td>
				<center><a href=apagar_user.php?id=".$row["id_usuario"]."><input class=art-button type=button cadastrar value=Apagar> </input></a></center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  ?>
</body>
</html>

