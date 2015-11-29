<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>SICAR - Novo Requerimento</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    
    <script language="JavaScript">
function verificacao() {
if(document.requerimento.req_nome.value=="" || document.requerimento.req_email.value=="" || document.requerimento.req_email.value=="" || document.requerimento.req_cpf.value=="") {
window.alert("Preencha todos os campos!")
return false;
}
}
</script>


<style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-1 { color: #15343D;  }
.art-content .art-postcontent-0 .layout-item-2 { color: #15343D; padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>


                        
                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
      <p style="text-align: center;"><span style="color: rgb(199, 23, 0); font-size: 11px;">Campos Obrigatórios (*)</span></p>
        
        <form name="requerimento" enctype="multipart/form-data" action="salvar_requerimento.php" method="post" onSubmit="return verificacao()"> <!-- INICIO DO FORMULÁRIO --> 
        <h3 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(180, 198, 202); padding-bottom: 5px; text-align: center;">
        
        <table width="100%" border="0">
  <tbody>
    <tr>
      <td width="40%" height=""><span style="color: rgb(52, 71, 76); font-size: 14px;">Faculdade:&nbsp;</span> </td>
      <td><select name="req_faculdade">
      <option>Sem Vínculo</option>
    <?php 
	require '../../Config/config_sistema.php';
	$query = mysql_query("SELECT * FROM faculdade");
	while($esp = mysql_fetch_array($query)) { ?>
 	<option value="<?php echo $esp['id_faculdade']?>"> <?php echo $esp['nome'] ?></option>
 	<?php } ?>    
      </select></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Tipo de Requerimento:&nbsp;</td>
      <td><select name="req_tipo">
      <option>Requerimento #01 </option>
      <option>Requerimento #02 </option>
      <option>Requerimento #03 </option>
      <option>Requerimento #04 </option>
      </select>*</td>
    </tr>
    <tr>
      <td> <span style="color: rgb(52, 71, 76); font-size: 14px;">Nome do Requisitante:&nbsp;</td>
      <td><input type="text" name="req_nome">*</td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Número de Matrícula:&nbsp;</td>
      <td><input type="text" name="req_matricula"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Email:&nbsp;</td>
      <td><input type="text" name="req_email"></span>*</td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">CPF:&nbsp;</td>
      <td><input type="text" name="req_cpf"></span>*</td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Telefone/Celular:&nbsp;</td>
      <td><input type="text" name="req_telefone"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Descrição/Observação:&nbsp;</td>
      <td><textarea name="req_observacao"></textarea>*</td>
    </tr>
    <form>
    <tr>
      <td>Anexos:</td>
      <td><input type="file" name="req_anexo"></td>
      </form>
    </tr>
  </tbody>
</table>
        
       

        <input value="Enviar" type="submit" class="art-button"> <input value="Limpar" type="reset"  class="art-button">
        </form>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout layout-item-1"></div>
</div>
</article></div>
                    </div>
                </div>
            </div>
    </div>




</body></html>