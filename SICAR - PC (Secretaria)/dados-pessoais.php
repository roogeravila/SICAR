<?php
$login = $_GET['login'];
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>SICAR - Painel de Controle</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



</head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">

<div class="art-object1522766970" data-left="0.23%"></div>
<div class="art-object93845721" data-left="18.58%"></div>
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
<ul class="art-vmenu"><li><a href="inicio.php?login=<?php echo $login?>" class="active">Início</a></li><li><a href="novo-requerimento.php?login=<?php echo $login?>">Novo Requerimento</a></li><li><a href="consultar-requerimentos.php?login=<?php echo $login?>">Consultar Requerimentos</a></li><li><a href="dados-pessoais.php?login=<?php echo $login?>">Dados Pessoais</a></li></ul>
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockcontent"><p><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p style="text-align: center;"><img width="148" height="32" alt="" src="images/Dados%20Pessoais.png" class=""><br></p></div> 
            <iframe width='800px' height='390px' frameborder='0' src='altera_dados.php?login=<?php echo $login?>'></iframe>
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