﻿<?php session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dark Rises</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../estilo.css"/>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
a {
	text-decoration:none;
}
a:visited {
	text-decoration:none;
}

#ini {
	background-image:url(../img/ini.png);
	width:100px;
	height:33px;
	float:left;
}
#ini:hover {
	background-image:url(../img/inihov.png);
}
#per {
	background-image:url(../img/per.png);
	width:100px;
	height:33px;
	float:left;
}
#per:hover {
	background-image:url(../img/perhov.png);
}
#mis {
	background-image:url(../img/mis.png);
	width:100px;
	height:33px;
	float:left;
}
#mis:hover {
	background-image:url(../img/mishov.png);
}
#due {
	background-image:url(../img/due.png);
	width:100px;
	height:33px;
	float:left;
}
#due:hover {
	background-image:url(../img/duehov.png);
}
#mer {
	background-image:url(../img/mer.png);
	width:100px;
	height:33px;
	float:left;
}
#mer:hover {
	background-image:url(../img/merhov.png);
}
#ran {
	background-image:url(../img/ran.png);
	width:100px;
	height:33px;
	float:left;
}
#ran:hover {
	background-image:url(../img/ranhov.png);
}-->
</style>

<!-- InstanceEndEditable -->
</head>

<body>

  <?php

   require_once("../sesion.class.php");

   $sesion = new sesion();

   $usuario = $sesion->get("usuario");
   $picture = $sesion->get("picture");
   $sesion->delete("login");
	
	?>

       
       

<script type="text/javascript">
    $(document).ready(function() {
        $('#coin-slider').coinslider({ width: 632, height: 169, navigation: true, delay: 5000 });
    });
</script>

<div id="login">
	<?php
	if( $usuario == false ) { ?>
		
		<p style="padding-top:10px; padding-right:150px;"><img src="img/ico/fbk.png" width="30" height="30" /> facebook <b style="font-size:12px; padding-left:20px;"><a href="login.php">Login</a></b></p>

   	<?php } else {?>
   
	<p style="padding-top:10px; padding-right:150px;"><img src="<?php echo $picture ?>" width="30" height="30" /> <?php  echo $usuario;?> <b style="font-size:12px; padding-left:20px;"><a href="cerrarsesion.php">Salir</a></b></p>
    <?php } ;?>
</div>

<div id="contenedor">
	<div id="logo">
    	<div id="social">
            	<a href="http://www.lastseal.com" target="_blank"><img src="../img/ico/lst.png" /></a><a href="http://www.facebook.com" target="_blank"><img src="../img/ico/fbk.png" /></a><a href="http://www.twitter.com" target="_blank"><img src="../img/ico/twt.png" /></a><!--<a href="#" target="_blank"><img src="../img/ico/ing.png" /></a>-->
      		</div>
            <div id="menui">
            <div id="inicio"><a href="../index.php" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="guia"><a href="guia.php" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="comunidad"><a href="../destruccion/index.html" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            </div>
            
            <div id="menud">
            <div id="media"><a href="media.php" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="servicios"><a href="../destruccion/index.html" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="soporte"><a href="../destruccion/index.html" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div></div>
            <div class="clear"></div>
    </div>
    <div id="mn"></div>
    <div id="contenido">
    	<div id="master">
    
    	<div id="mastertop"></div>
        <div id="mastermid">
        	<div id="cmaster">
            	<div id="ccont">
				<!-- InstanceBeginEditable name="contenidoeditable" -->
                <div style="width:700px; text-align:center; margin-left:100px;">
    	<div id="ini"><a href="guia.php" target="_self"><span style="height:33px; display:block;">&nbsp;</span></a></div> 
        <div id="per"><a href="personaje.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div> 
        <div id="mis"><a href="misiones.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div id="due"><a href="duelos.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div id="mer"><a href="mercado.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div> 
        <div id="ran"><a href="ranking.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div style="clear:both;"></div>
    </div>
    <div style="width:189px; margin-right:auto; margin-left:auto; text-align:center; padding-bottom:10px; padding-top:10px">
    	<div style="width:63px; float:left;"><a href="rhumanos.php"><img src="../img/h.png" /><br />Humanos</a></div>
        <div style="width:63px; float:left;"><a href="rangeles.php"><img src="../img/a.png" /><br />Ángeles</a></div>
        <div style="width:63px; float:left;"><a href="rdemonios.php"><img src="../img/d.png" /><br />Demonios</a></div>
        <div class="clear"></div>
    </div>
                
                
				<div style="width:800px; height:700px; margin-left:auto; margin-right:auto; background-image:url(../img/razas/demonios.png);background-position:0px 50px 0px 0px; background-repeat:no-repeat;">
                	<div style="text-align:center; padding-bottom:30px;">
                    	<p><img src="../img/d.png" /></p>
                    	<p><strong><span style="font-size: 18px; color: #F60">Demonios</span></strong></p>
        
        <p>Son  humanos que pusieron sus almas al servicio de Luzbel, transformándose por  completos en seres del “abismo” .</p>
      <p>En niveles avanzados los Demonios pueden desarrollar sus poderes enfocando su afinidad por el destructivo elemento<strong> Fuego</strong>, mientras que otros optan por lo mortal y lo frío del <strong>Hielo</strong>.</p>
                    </div>
                    <div style="padding-top:150px;">
                    	<div style="width:400px; float:left;">
                        	<p><span style="color:#F60"><strong>Demonios tipo Fuerza:</strong></span>:</p>
                            <div style="width:325px; margin-left:auto; margin-right:auto;"><p style="padding-top:20px;">Son los guerreros de  la oscuridad encargados de sembrar la guerra, ira y confusión en el mundo de  los humanos y de esta manera abrir paso a sus demás hermanos, demonios y  ángeles caídos.<br />
          Han desarrollado increíbles técnicas de  ataques y defensas, mediante la manipulación y transformación de su cuerpo. Su  piel puede volverse tan dura que soportan casi cualquier ataque, pueden verse  envueltos en una serie de explosiones que destruyen todo a su alrededor y salir  ilesos. <br />
          Canalizan su energía a través de la ira  para aumentar la fuerza de sus ataques. Son capaces de deformar sus huesos y  hacer de estos armas poderosas, las cuales incrementan su daño al impregnarles  ácido segregado de sus propios cuerpos.<br />
          El dominio metamórfico que poseen les  permite deformar sus cuerpos a voluntad, por lo que pasan desapercibidos al  tomar su apariencia humana.</p></div>
                        </div>
                        <div style="width:400px; float:left;">
                        <p><span style="color:#F60"><strong>Demonios tipo Inteligencia:</strong></span>:</p>
                            <div style="width:325px; margin-left:auto; margin-right:auto;"><p style="padding-top:20px;">Son los señores de las sombras y  penumbras, que siembran la desesperación y el miedo en la tierra, su gran poder  mental les permite el control de la oscuridad que los rodea.<br />
          Capaces de dominar las sombras,  utilizan estas para atacar a sus objetivos, dándoles forma de espectros o  fantasmas que dañan y además drenan vida a sus víctimas, la cual es absorbida  por el demonio.<br />
          Una de sus grandes habilidades es  la de manipular el espacio, capaces de crear un vacío en un área, la cual es  llenada con un gas venenoso que incluso penetra la piel.<br />
          A pesar de sus ataques calculados  y seguros, si bien son alcanzados en combate cuerpo a cuerpo, estos no están  indefensos, crean unas llamas que envuelven su cuerpo protegiéndolos de  cualquier daño y queman cualquier veneno que pudiera entrar en su cuerpo.</p>
</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
				<!-- InstanceEndEditable --></div>
          </div>
        </div>
        <div id="masterbot"></div>
        
        
        
        
    	</div>
        <!-- InstanceBeginEditable name="bot" -->
        <div style="background-image:url(../img/bot.png); background-repeat:no-repeat; height:28px;"></div>
        <!-- InstanceEndEditable -->
	</div>
    <div id="pie">
    	<a href="http://www.corfo.cl" target="_blank"><img src="../img/logos/corfo.png" /></a>
        <a href="http://www.gob.cl" target="_blank"><img src="../img/logos/chile.png" /></a>
        <a href="http://www.lastseal.com" target="_blank"><img src="../img/logos/ls.png" /></a>
        <a href="http://www.utfsm.cl" target="_blank"><img src="../img/logos/usm.png" /></a>
		<a href="http://www.3ie.cl/" target="_blank"><img src="../img/logos/3ie.png" /></a>
    </div>
</div>

</body>
<!-- InstanceEnd --></html>
