<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    
<title></title>
</head>


<body>
<?php
$status;
include "../Config/config_sistema.php";
$sql="SELECT * FROM requerimento";
$result = mysql_query($sql);


	echo '<table style="width:70%" border="0" >';
	echo '<tr bgcolor="#CCCCCC">
				<td style="width:3%"><center>Protocolo</center></td>
				<td style="width:15%"><center>Solicitante</center></td>
				<td style="width:10%"><center>Tipo</center></td>
				<td style="width:5%"><center>Status</center></td>
				<td style="width:3%"><center>Opções</ce</td>
			</tr>';
	
	while($row = mysql_fetch_array($result))
	{
		if($row['req_status']=="1")
		$status="Em Análise";
		if($row['req_status']=="2")
		$status="Finalizado";
		if($row['req_status']=="3")
		$status="Recusado";
		
	  echo "<tr>
				<td>".$row['req_protocolo']."</td>
				<td>". $row['req_nome']. "</td>
				<td>". $row['req_tipo']. "</td>
				<td>". $status. "</td>
				<td>
				<a href=apagar_requerimento.php?id=".$row["req_protocolo"]."><input class=art-button type=button cadastrar value=Excluir> </input></a></center>
				</td>";
				"</tr>" ;
	}
	  echo '</table>';
	  

	  ?>
</body>
</html>

