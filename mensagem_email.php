<html>
        <meta charset="utf-8">
        <h2> SICAR - Sistema de Cadastro e Acompanhamento de Requisições </h2>
        <?php

        $nome = "Roger";
        $data_envio = date("d-m-Y");
        $id_protocolo = 01;
        $ano = date("Y");
        $Protocolo = $ano.$id_protocolo; 
         printf('<h3> Olá  - '.$nome.'<p>Seu Numero de Protocolo é: '.$Protocolo.'</h3><p>Este email foi enviado em '.$data_envio.'') ;
        
        // falta terminar a mensagem
        

          ?>
        
        
    </html>