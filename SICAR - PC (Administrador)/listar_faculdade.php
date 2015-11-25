<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">

    
<title>Lista de Usuários</title>
</head>


<body>
<?php
include "../Config/config_sistema.php";
$sql="SELECT * FROM faculdade";
$result = mysql_query($sql);
echo 'Listagem de Faculdades';
	
	echo '<table style="width:72%" border="1" >';
	echo '<tr>
				<td style="width:3%">ID</td>
				<td style="width:18%">Nome da Faculdade</td>
				<td style="width:10%">Diretor</td>
				<td style="width:5%">Telefone/Ramal/SIAPE</td>
				<td style="width:10%">Email</td>
				<td style="width:10%">Ações</td>
			</tr>';
	
	while($row = mysql_fetch_array($result))
	{
	  echo "<tr>
				<td>".$row['id_faculdade']."</td>
				<td>". $row['nome']. "</td>
				<td>". $row['diretor']. "</td>
				<td>". $row['ramal']. "</td>
				<td>". $row['email']. "</td>
				<td>
				<center><a href=apagar_faculdade.php?id=".$row["id_faculdade"]."><input class=art-button type=button cadastrar value=Apagar> </input></a></center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  

	  ?>
</body>
</html>

