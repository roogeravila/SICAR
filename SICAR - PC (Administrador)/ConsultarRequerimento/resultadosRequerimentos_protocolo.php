<?php
$protocolo = $_POST['protocolo'];
$cpf = $_POST['cpf'];

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
    
    <script language="JavaScript">
function verificacao_protocolo() {
if(document.consulta_protocolo.protocolo.value=="") {
window.alert("Preencha o Campo corretamente!")
return false;
}
}
</script>

    <script language="JavaScript">
function verificacao_cpf() {
if(document.consulta_cpf.cpf.value=="") {
window.alert("Preencha o Campo corretamente!")
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

                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
      <p style="text-align: center;">
        
  <iframe width='700px' height='390px' frameborder='0' src='listar_requerimentos_protocolo.php?protocolo=<?php echo $protocolo?>&cpf=<?php echo $cpf?>'></iframe>
      </p>
       
        
        <h3 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(180, 198, 202); padding-bottom: 5px; text-align: center;">
        <center></center>

        
        <h3 style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(180, 198, 202); padding-bottom: 5px; text-align: left;"><a href="ConsultarRequerimentos.html" style="font-size: 11px;">Nova Busca</a><br>
    </div>
</div>
</div>
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <p><br></p>
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