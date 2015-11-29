<html>
        <meta charset="utf-8">
        <h2> SICAR - Sistema de Cadastro e Acompanhamento de Requisições </h2>
        <?php

        $nome = "Roger";
        $data_envio = date("d-m-Y");
        $ano = date("Y");
        //$Protocolo = $ano.$id_protocolo; 
        

// Conexão com o Banco de Dados
    $banco = mysqli_connect("localhost","root","") or die (mysql_error ());

    // Seleciona o Banco de Dados
    mysqli_select_db($banco,"bdsicar") or die("Erro ao Selecionar Base de dados".mysql_error());
    //query SQL
    
    $comando = "SELECT max (id_faculdade) FROM faculdade";

    $query = mysqli_query($banco,$comando);// result recebe o resultado da consulta
    ///$esp = mysql_fetch_array($query)
     //linhas recebe a quantidade de elementos da consulta result
    
      
      while($esp = mysql_fetch_array($query)) {
        
        $id = $esp;

        $Protocolo = $ano.$id;

        printf('<h3> Olá  - '.$nome.'<p>Seu Numero de Protocolo é: '.$Protocolo.'</h3><p>Este email foi enviado em '.$data_envio.'') ;
    // Executa a query (o recordset $id contém o resultado da query, no caso o maior id do banco)
    //$id = mysqli_query($banco,$comando);// id recebe o resultado da consulta
     // $linhas = mysqli_num_rows($result); //linhas recebe a quantidade de elementos da consulta result
      
      
   
        }
       ?> 
        
</html>