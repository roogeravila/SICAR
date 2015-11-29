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
include "../Config/config_sistema.php";

$id = $_GET['login'];


$sql="SELECT * FROM usuario WHERE id_usuario='$id'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);


?>

<form id="form1" name="form1" method="post" action="alterando_dados_usuarios.php?id=<?php echo $id?>">
<table width="500" border="0">
  <tr>
    </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email" value="<?php echo $row['email']?>"  id="email"/> </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Login:</td>
        <td><input type="text" name="login" disabled="disabled" value="<?php echo $row['login']?>"  id="login"/> </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Senha:</td>
        <td><input type="text" name="senha" id="senha"  value="<?php echo $row['senha']?>"/></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
      <br />
        <td></td>
        <td><input class="art-button" name="alterar" type="submit" value="Alterar" /></td>
        <td></td>
      </tr>
  </table>
      <br />
  
</form>
</body>
</html>