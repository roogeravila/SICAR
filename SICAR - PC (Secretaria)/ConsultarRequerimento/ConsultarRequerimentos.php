<?php
$faculdade = $_GET['faculdade'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>SICAR - Consultar Requerimentos</title>
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
  <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
      <p style="text-align: center;"><span style="color: rgb(199, 23, 0); font-size: 11px;">Campos Obrigatórios (*)</span></p>
        
        <h3 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(180, 198, 202); padding-bottom: 5px; text-align: center;">
        <center><table width="200" border="0">
  <tbody>
    <tr>
    <form name="consulta" action="resultadosRequerimentos_protocolo.php?faculdade=<?php echo $faculdade?>" method="post">
      <td><span style="color: rgb(52, 71, 76); font-size: 14px;">Protocolo:</td>
      <td><input type="text" name="protocolo"></td>
    </tr>
    <tr>
      <td></td>
      <td><center> ou</center></td>
    </tr>
    <tr>
      <td><center><span style="color: rgb(52, 71, 76); font-size: 14px;">CPF:</</td>
      <td><input type="text" name="cpf"></span></td>
    </tr>
  </tbody>
</table> </center><br>
  <input name="enviar" value="Consultar" type="submit" class="art-button">  <input name="limpar" value="Limpar" type="reset" class="art-button">
  </form>

        
        <h3 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(180, 198, 202); padding-bottom: 5px; text-align: left;"><a href="botao_selecao.php" style="font-size: 11px;">Voltar</a><span style="font-size: 11px;"></span></h3>
    </div>
    </div>
</div>
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


</body></html>