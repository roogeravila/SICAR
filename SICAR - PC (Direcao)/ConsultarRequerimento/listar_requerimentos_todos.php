<?php
$faculdade = $_GET['faculdade'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<style type="text/css">
<!--
.txt_filtro {
	height: 15px;
	width:10%;
}
-->
</style>
    
<title></title>
</head>


<body>
<a><input class="art-button" type="submit" value="Nova Busca" /> </a>
<br />
<br />
<?php
$status="";
include "../../Config/config_sistema.php";
$sql="SELECT * FROM requerimento WHERE req_faculdade='$faculdade'";
$result = mysql_query($sql);



	echo '<table style="width:100%" border="0" >';
	echo '<tr bgcolor="#CCCCCC" bordercolor="#FFFFFF ">
				<td style="width:3%"><center>Protocolo</center></td>
				<td style="width:15%"><center>Solicitante</center></td>
				<td style="width:10%"><center>Tipo</center></td>
				<td style="width:5%"><center>Status</center></td>
				<td style="width:13%"><center>Opções</ce</td>
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
				<a href=FolhaRequerimento/requerimento.php?id=".$row["req_protocolo"]."><input class=art-button type=button cadastrar value=Abrir> </input></a></center>
				"?>
				 <?php 
				 if($row['req_status']=="1")
				 echo "<a href=FolhaRequerimento/requerimento_analisar.php?id=".$row["req_protocolo"]."&faculdade=".$faculdade."><input class=art-button type=button cadastrar value=Analisar> </input></a>"?>
				<?php echo "</td>";
				"</tr>" ;
	}
	  echo '</table>';	  

	  ?>
</body>
</html>
