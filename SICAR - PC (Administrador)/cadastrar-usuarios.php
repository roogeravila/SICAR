<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
     <title>SICAR - Painel de Controle</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">

<script language="JavaScript">
function verificacao() {
if(document.cadastro.nome.value=="" || document.cadastro.matricula.value=="" || document.cadastro.email.value=="" || document.cadastro.cpf.value=="" || document.cadastro.telefone.value=="" || document.cadastro.usuario.value=="" || document.cadastro.senha.value=="") {
window.alert("Preencha todos os campos")
return false;
}
}
</script>



    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>

<script type="text/javascript" src="js/jquery-1.2.6.pack.js">
</script><script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>

<script>
function ValidarCPF(Objcpf){
        var cpf = Objcpf.value;
        exp = /\.|\-/g
        cpf = cpf.toString().replace( exp, "" ); 
        var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
        var soma1=0, soma2=0;
        var vlr =11;

        for(i=0;i<8;i++){
                soma1+=eval(cpf.charAt(i)*(vlr-1));
                soma2+=eval(cpf.charAt(i)*vlr);
                vlr--;
        }       
        soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
        soma2=(((soma2+(2*soma1))*10)%11);

        var digitoGerado=(soma1*10)+soma2;
        if(digitoGerado!=digitoDigitado)        
                alert('CPF Invalido!');         
}
 </script>
 
 <script type="text/javascript">
			function FormataCpf(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("/", "");
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 14)
				{
					if (tam == 4)
						campo.value = vr.substr(0, 3) + '.';
					if (tam == 7)
						campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 6) + '.';
					if (tam == 11)
						campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 3) + '.' + vr.substr(7, 3) + '-' + vr.substr(11, 2);
				}
			}
		</script>

</head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">

<div class="art-object1522766970" data-left="0.23%"></div>
<div class="art-object934608825" data-left="18.68%"></div>
<form method="post" action="../logout.php">
<input class="art-object1244410361" data-left="99.06%" type="image" name="sair" src="images/object1244410361.png">
</form> 

            </div>

                        
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="inicio.html">Início</a></li><li><a href="novo-requerimento.html">Novo Requerimento</a></li><li><a href="consultar-requerimentos.html">Consultar Requerimentos</a></li><li><a href="excluir-requerimento.html">Excluir Requerimento</a></li><li><a href="dados-pessoais.html">Dados Pessoais</a></li><li><a href="cadastrar-faculdade.html">Cadastrar Faculdade</a></li><li><a href="excluir-faculdade.html">Excluir Faculdade</a></li><li><a href="excluir-usuarios.html">Excluir Usuários</a></li><li><a href="cadastrar-usuarios.php" class="active">Cadastrar Usuários</a></li><li><a href="alterar-usuarios.html">Alterar Usuários</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><p style="text-align: center;"><img width="193" height="26" alt="" src="images/Cadastrar%20Usu%c3%a1rios.png" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;"><br></p>

<!-- FORMULÁRIO DE CADASTRO DE USUÁRIO -->  
        <form name="cadastro" method="post" action="cadastra_usuario.php" onSubmit="return verificacao()"> 
        <h3 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(180, 198, 202); padding-bottom: 5px; text-align: center;">
        
        <table width="100%" border="0px">
  <tbody>
    <tr>
      <td width="40%" height=""><span style="color: rgb(52, 71, 76); font-size: 14px;">Tipo de Usuário:&nbsp;</span> </td>
      <td><select name="cargo">
      <option value="0">Bolsista </option>
      <option value="1">Diretor de Faculdade</option>
      <option value="2">Secretário de Faculdade </option>
      </select></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Faculdade (Vínculo):&nbsp;</td>
      <td><select name="faculdade"> 
    <option>Sem Vínculo</option>
    <?php 
	require '../Config/config_sistema.php';
	$query = mysql_query("SELECT * FROM faculdade");
	while($esp = mysql_fetch_array($query)) { ?>
 	<option value="<?php echo $esp['id_faculdade']?>"> <?php echo $esp['nome'] ?></option>
 	<?php } ?>    
      </select></td>
    </tr>
    <tr>
      <td> <span style="color: rgb(52, 71, 76); font-size: 14px;">Nome Completo:&nbsp;</td>
      <td><input type="text" name="nome"></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Número de Matrícula/SIAPE:&nbsp;</td>
      <td><input type="text" name="matricula"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Email:&nbsp;</td>
      <td><input type="text" name="email"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">CPF:&nbsp;</td>
      <td><input id="cpf" type="text" name="cpf" onkeyup="FormataCpf(this,event)" onBlur="ValidarCPF(cadastro.cpf);"  maxlength="14"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Telefone/Celular:&nbsp;</td>
      <td><input type="text" name="telefone"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Nome de Usuário (User/Login):&nbsp;</td>
      <td><input type="text" name="usuario"></span></td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><input type="text" name="senha"></span></td>
    </tr>
  </tbody>
</table>
        
       
        <input class="art-button" value="Cadastrar" type="submit">  &nbsp; <input class="art-button" value="Limpar" type="reset">
        </form> <!-- FIM DO FORMULÁRIO -->
                                </div>
</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<p style="widows: 1;"><span style="color: rgb(0, 0, 0); font-family: Tahoma; font-size: 10px;"><br></span></p>
    
  </div>
</footer>

</div>


</body></html>