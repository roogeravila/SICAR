

<?php
// verifica se email tem @ e um ponto...    

    function validaemail($email){
    	//verifica se e-mail esta no formato correto de escrita
    	if (!ereg('^([a-zA-Z0-9.-_])*([@])([a-z0-9]).([a-z]{2,3})',$email)){
    		$mensagem='E-mail Inválido!';
    		return $mensagem;
        }
        else{
    		//Valida o dominio
    		$dominio=explode('@',$email);
    		if(!checkdnsrr($dominio[1],'A')){
    			$mensagem='E-mail Inválido!';
    			return $mensagem;
    		}
    		else{return true;} // Retorno true para indicar que o e-mail é valido
    	}
    }
     
    ?>


