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
        
        <form> 
        <h3 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(180, 198, 202); padding-bottom: 5px; text-align: center;">
        
        <table width="100%" border="0px">
  <tbody>
    <tr>
      <td width="40%" height=""><span style="color: rgb(52, 71, 76); font-size: 14px;">Faculdade:&nbsp;</span> </td>
      <td><select name="faculdade"> 
    <?php 
	require '../../Config/config_sistema.php'; // sai da pasta novo requerimento /../ e sai da pasta Sicar- PC (Administrador) /../ para poder achar a Pasta Config 
	$query = mysql_query("SELECT * FROM faculdade");
	while($esp = mysql_fetch_array($query)) { ?>
 	<option value="<?php echo $esp['id_faculdade']?>"> <?php echo $esp['nome'] ?></option>
 	<?php } ?>    
      </select></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Tipo de Requerimento:&nbsp;</td>
      <td><select>
      <option>Requerimento #01 </option>
      <option>Requerimento #02 </option>
      <option>Requerimento #03 </option>
      <option>Requerimento #04 </option>
      </select>*</td>
    </tr>
    <tr>
      <td> <span style="color: rgb(52, 71, 76); font-size: 14px;">Nome do Requisitante:&nbsp;</td>
      <td><input type="text">*</td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Número de Matrícula:&nbsp;</td>
      <td><input type="text"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Email:&nbsp;</td>
      <td><input type="text"></span>*</td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">CPF:&nbsp;</td>
      <td><input type="text"></span>*</td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Telefone/Celular:&nbsp;</td>
      <td><input type="text"></span></td>
    </tr>
    <tr>
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Descrição/Observação:&nbsp;</td>
      <td><textarea></textarea>*</td>
    </tr>
    <tr>
      <td>Anexos:</td>
      <td><input type="file"></td>
    </tr>
  </tbody>
</table>
        
       
        <a href="#" class="art-button">Enviar</a>&nbsp;<a href="" class="art-button">Limpar</a>&nbsp;</h3>
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


</div>


</body></html>