<?php
include "../Config/config_sistema.php";

$email = $_POST['email'];
$id= $_GET['id'];
$senha = $_POST['senha'];

$atu = "UPDATE usuario SET email = '$email', senha ='$senha' WHERE id_usuario='$id'";
$sucesso = mysql_query($atu);

echo "Atualizado com Sucesso!<br>";
echo "<a href='listar_usuarios_alterar.php'>Retornar</a>";
?>

