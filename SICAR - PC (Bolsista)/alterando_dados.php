<?php
include "../Config/config_sistema.php";

$email = $_POST['email'];
$login= $_GET['login'];
$senha = $_POST['senha'];

$atu = "UPDATE usuario SET email = '$email', senha ='$senha' WHERE login='$login'";
$sucesso = mysql_query($atu);

echo "Atualizado com Sucesso!<br>";
echo "<a href='altera_dados.php?login=$login'>Retornar</a>";
?>

