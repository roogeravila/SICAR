<?php
include "../../../Config/config_sistema.php";

$protocolo = $_GET['protocolo'];
$faculdade = $_GET['faculdade'];

$avaliador = $_POST['avaliador'];
$resposta = $_POST['resposta'];
$status = $_POST['status'];

$atu = "UPDATE requerimento SET req_avaliador = '$avaliador', req_resposta='$resposta', req_status ='$status' WHERE req_protocolo ='$protocolo'";
$sucesso = mysql_query($atu);

echo "Atualizado com Sucesso!<br>";
echo "<a href='../botao_selecao.php?faculdade=$faculdade'>Retornar</a>";
?>

