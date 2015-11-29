<?php
$faculdade = $_GET['faculdade'];
echo $faculdade;
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Home</title>
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
<div id="art-main">
    <div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
 <?php
 $protocolo = $_GET['id'];
 include "../../../Config/config_sistema.php";
$sql="SELECT * FROM requerimento WHERE req_protocolo='$protocolo'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);


$anexo ="../../../SICAR - Novo Requerimento/".$row['req_anexo'];
$faculdade=$row['req_faculdade'];


$sql_faculdade="SELECT * FROM faculdade WHERE id_faculdade='$faculdade'";
$result_faculdade = mysql_query($sql_faculdade);
$row_faculdade = mysql_fetch_array($result_faculdade);

 ?>                              
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
      <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; width: 100%;">
                
        <tbody>
        <tr>
        <td style="width: 30%;">Protocolo:</td>
        <td style="width: 70%;"><?php echo $row['req_protocolo']?></td>
        </tr>
        <tr>
        <td style="width: 30%;">Nome do Solicitante:</td>
        <td style="width: 70%;"><?php echo $row['req_nome']?></td>
        </tr>
        <tr>
        <td style="width: 30%;">Destinatário:</td>
        <td style="width: 70%;"><?php echo $row_faculdade['nome']?></td>
        </tr>
        <tr>
        <td style="width: 30%;">Tipo de Requerimento:</td>
        <td style="width: 70%;"><?php echo $row['req_tipo']?></td>
        </tr>
        <tr>
        <td style="width: 30%;">CPF (Requerente):</td>
        <td style="width: 70%;"><?php echo $row['req_cpf']?></td>
        </tr>
        <tr>
        <td style="width: 30%;">Email (Requerente):</td>
        <td style="width: 70%;"><?php echo $row['req_email']?></td>
        </tr>
        <tr>
        <td style="width: 30%;">Telefone (Requente):</td>
        <td style="width: 70%;"><?php echo $row['req_telefone']?></td>
        </tr>
        <tr>
        <td style="width: 30%;">Anexo:</td>
        <td style="width: 70%;"><a href="<?php echo $anexo?>">Download</a></td>
        </tr>
        <tr>
        <td style="width: 30%;">Observação/Informações:</td>
        <td style="width: 70%;"><?php echo $row['req_observacao']?></td>
        </tr>
        </tbody>
      </table>
      
        <p style="text-align: center;"><span style="color: rgb(52, 71, 76); line-height: 26px;"><br></span></p>
        <p style="text-align: center;"><span style="line-height: 26px; background-color: rgb(255, 255, 255); color: rgb(184, 0, 0); font-size: 16px; text-decoration: underline;">RESPOSTA DO REQUERIMENTO</span></p>
        <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; width: 100%;">
        <tbody>
        <form method="post" action="salvar_resposta.php?protocolo=<?php echo $protocolo?>&faculdade=<?php echo $faculdade?>" name="analisar"  enctype="multipart/form-data">
        <tr>
        <td style="width: 30%;">Avaliador:</td>
        <td style="width: 70%;"><input type="text" name="avaliador" id="textfield">          <br></td>
        </tr>
        <tr>
   
        <td style="width: 30%;">Anexos:</td>
        <td style="width: 70%;"><input type="file" name="anexo" id="button" value="Anexar">          <br></td>
        </tr>
        <tr>
        <td style="width: 30%;">Parecer:</td>
        <td style="width: 70%;"><label for="textarea"></label>
          <textarea name="resposta" id="textarea"></textarea>          
          <br></td>
        </tr>
        <tr>
        <td style="width: 30%;">Status do Requerimento:</td>
        <td style="width: 70%;"><select name="status" id="select">
        <option value="1">Em análise </option>
        <option value="2">Finalizado </option>
        <option value="3">Recusado </option>
        </select>          <br></td>
        </tr>
        <tr>
        <td><input name="enviar" value="Enviar" type="submit" class="art-button"> </td>
        </tr>
        
        </form>
        </tbody>
        </table>
        <p style="text-align: center;"><br>
        </p>
    </div>
    </div>
</div>
                </div>
                <div class="art-content-layout layout-item-1">
                  <div class="art-content-layout-row">
                    <div class="art-layout-cell layout-item-2" style="width: 100%" >
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div>
    </div>

  </div>
</footer>

</div>


</body></html>