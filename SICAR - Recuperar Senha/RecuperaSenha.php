<?php

// pegar o form e jogar na variavel  $cpf.


    // Conexão com o Banco de Dados
    $banco = mysqli_connect("localhost","root","") or die (mysql_error ());

    // Seleciona o Banco de Dados
    mysqli_select_db($banco,"bdsicar") or die("Erro ao Selecionar Base de dados".mysql_error());
    //query SQL

    $query = "SELECT senha from usuario where cpf = 31525";
    // executa a query e 'grava' o resultado em $resultado
    $resultado = mysql_query($query) or die(mysql_error());

    // busca os campos da query
    $campo = mysql_fetch_array($resultado);
    // armazena cada campo do banco em uma variável
echo "$resultado";

?>
 </html>