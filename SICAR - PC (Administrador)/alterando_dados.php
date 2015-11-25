<?php
include "../Config/config_sistema.php";

$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$atu = "UPDATE adm SET email = '$email', login='$login', senha ='$senha'";
$sucesso = mysql_query($atu);

echo "Atualizado com Sucesso!<br>";
echo "<a href='altera_dados.php'>Retornar</a>";
?>

