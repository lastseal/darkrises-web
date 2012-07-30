<?php

/* DarkRisesWebBundle:Default:evento-sello.html.twig */
class __TwigTemplate_4cb7051b12c0804e19fc70f9573df96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DarkRisesWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'lightboxes' => array($this, 'block_lightboxes'),
            'end' => array($this, 'block_end'),
            'javascript' => array($this, 'block_javascript'),
            'hidden' => array($this, 'block_hidden'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DarkRisesWebBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style type=\"text/css\">
\t\tbody{
\t\t\tbackground: url(\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/fondo-arriba.png"), "html", null, true);
        echo "\") no-repeat center top #000000 !important;
\t\t}
\t\t.main-content{
\t\t\tbackground: none !important;
\t\t}
\t\t.counter{
\t\t\tbackground: url(\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/piedra-arriba.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\twidth: 979px;
\t\t\theight: 325px;
\t\t\tmargin-top: 60px;
\t\t\tmargin-right: 1000px;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.sello{
\t\t\tbackground: url(\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/piedra-abajo.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\twidth: 1029px;
\t\t\theight: 1372px;
\t\t\ttext-align: center;
\t\t\tmargin-top: 100px;
\t\t\tpadding-top: 150px;
\t\t}
\t\t.end{
\t\t\theight: 357px;
\t\t\tbackground: url(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/fondo-abajo.png"), "html", null, true);
        echo "\") no-repeat center bottom;
\t\t\tz-index: 0;
\t\t}
\t\t.pop-up{
\t\t\twidth: 1000px;
\t\t\theight: 1293px;
\t\t\tbackground: url(\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/pop-fondo.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\tmargin: auto;
\t\t}
\t\t.numeros{
\t\t\tbackground: url(\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/counter-fondo.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\twidth: 485px;
\t\t\theight: 149px;
\t\t}
\t\t.margin{
\t\t\tmargin-left: 350px;
\t\t}
\t\t.cantidad{
\t\t\tletter-spacing: 22px;
\t\t\tpadding-left: 30px;
\t\t\tpadding-top: 18px;
\t\t\tfont-size: 100px;
\t\t}
\t\t.white-glow{
\t\t\tfilter: glow(color=#ffffff,strength=1);
\t\t\ttext-shadow: 0 0 0.1em #ffffff;
\t\t}
\t\t.black-glow{
\t\t\tfilter: glow(color=#000000,strength=1);
\t\t\ttext-shadow: 0 0 0.2em #000000;
\t\t}
\t\t.padding{
\t\t\tmargin-top: 150px;
\t\t}
\t\t.counter-popup{
\t\t\tcolor: #fe6000;
\t\t\ttext-align: center;
\t\t\tmargin-left: 300px;
\t\t\tcursor: pointer;
\t\t}
\t\t.shadow-padding{
\t\t\tpadding-right: 170px;
\t\t\tpadding-left: 170px;
\t\t\ttext-align: left;
\t\t}
\t\t.flash{
\t\t\twidth: 465px;
\t\t\theight: 440px;
\t\t\tmargin-top: 200px;
\t\t\tposition:relative;
\t\t\tz-index:1;
\t\t}
\t\t.flash-wrapper{
\t\t\tbackground: url(\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/background-sello.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tdisplay: block;
\t\t\tmargin-left: auto;
\t\t\tmargin-right: auto;
\t\t\twidth: 500px;
\t\t\theight: 500px;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.sello-icons{
\t\t\tmargin-top: -430px;
\t\t\twidth: 465px;
\t\t\theight: 440px;
\t\t\tmargin-left: 30px;
\t\t\tmargin-right: auto;
\t\t\tposition: absolute;
\t\t\tz-index: 10;
\t\t}
\t\t.sello-icon-interrogacion{
\t\t\twidth: 60px;
\t\t\theight: 61px;
\t\t\tbackground: url(\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tmargin: auto;
\t\t\tdisplay: block;
\t\t\tmargin-top: 5px;
\t\t\tmargin-right: 206px;
\t\t}
\t\t.sello-icon-interrogacion-hover{
\t\t\tbackground: url(\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-icon-key{
\t\t\twidth: 60px;
\t\t\theight: 77px;
\t\t\tbackground: url(\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tmargin: auto;
\t\t\tdisplay: block;
\t\t\tmargin-top: 17px;
\t\t\tmargin-right: 51px;
\t\t}
\t\t.sello-icon-key-hover{
\t\t\tbackground: url(\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-icon-media{
\t\t\twidth: 60px;
\t\t\theight: 77px;
\t\t\tbackground: url(\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tmargin: auto;
\t\t\tdisplay: block;
\t\t\tmargin-top: 50px;
\t\t\tmargin-right: 29px;
\t\t}
\t\t.sello-icon-key-media{
\t\t\tbackground: url(\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.number{
\t\t\tfloat: left;
\t\t\tmargin-left: 5px;
\t\t\tmargin-right: 1px;
\t\t\tmargin-top: 15px;
\t\t}
\t\t.info-sellos{
\t\t\tdisplay:block;
\t\t\twidth:70%;
\t\t\tmargin: auto;
\t\t}
\t\t.text-sellos{
\t\t\tfloat: left;
\t\t\tdisplay: none;
\t\t\ttext-align: left;
\t\t\twidth: 60%;
\t\t}
\t\t.menu-sellos{
\t\t\tfloat: right;
\t\t\twidth: 30%;
\t\t}
\t\t.title{
\t\t\tfont-family: copperplate;
\t\t\tfont-size: 30px;
\t\t}
\t\t.sello-menu-interrogacion{
\t\t\twidth: 51px;
\t\t\theight: 50px;
\t\t\tbackground: url(\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/menu-off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-interrogacion-over{
\t\t\tbackground: url(\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/menu-over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-interrogacion-stay{
\t\t\tbackground: url(\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/menu-over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-key{
\t\t\twidth: 36px;
\t\t\theight: 75px;
\t\t\tbackground: url(\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/menu-off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-key-over{
\t\t\tbackground: url(\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/menu-over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-key-stay{
\t\t\tbackground: url(\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/menu-over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-media{
\t\t\twidth: 47px;
\t\t\theight: 46px;
\t\t\tbackground: url(\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/menu-off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-media-over{
\t\t\tbackground: url(\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/menu-over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu-media-stay{
\t\t\tbackground: url(\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/menu-over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-menu{
\t\t\tcursor:pointer;
\t\t\tmargin: 5px auto;
\t\t}
\t\t.padding-top{
\t\t\tmargin-top: 5px;
\t\t}
\t\t.story1{
\t\t\tmargin-right: 110px;
\t\t}
\t\t.story2{
\t\t\tmargin-right: 115px;
\t\t}
\t\t.story3{
\t\t\tmargin-right: 130px;
\t\t}
\t\t.story4{
\t\t\tmargin-right: 150px;
\t\t}
\t\t.story5{
\t\t\tmargin-right: 200px;
\t\t}
\t\t.story6{
\t\t\tmargin-right: 250px;
\t\t}
\t\t.story7{
\t\t\tmargin-right: 260px;
\t\t}
\t\t.story8{
\t\t\tmargin-right: 300px;
\t\t}
\t\t.story9{
\t\t\tmargin-right: 110px;
\t\t}
\t</style>
";
    }

    // line 231
    public function block_main($context, array $blocks = array())
    {
        // line 232
        echo "\t<div class=\"counter\">
\t\t<div class=\"numeros margin\">
\t\t\t<div class=\"cantidad copperplate white-glow\">
\t\t\t\t00000
\t\t\t</div>
\t\t</div>
\t\t<div class=\"counter-popup\">¿Qué es ésto?</div>
\t</div>
\t<div class=\"sello\">
\t\t<div class=\"flash-wrapper\">
\t\t <object id=\"FlashID\" class=\"flash\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" >
\t\t\t<param name=\"movie\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/animacionsello.swf"), "html", null, true);
        echo "\" />
\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t<param name=\"wmode\" value=\"transparent\" />
\t\t\t<param name=\"swfversion\" value=\"6.0.65.0\" />
\t\t\t<!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
\t\t\t<!-- <param name=\"expressinstall\" value=\"Scripts/expressInstall.swf\" /> -->
\t\t\t<param name=\"BGCOLOR\" value=\"#D6D6D6\" />
\t\t\t<!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
\t\t\t<!--[if !IE]>-->
\t\t\t<object type=\"application/x-shockwave-flash\" data=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/animacionsello.swf"), "html", null, true);
        echo "\" width=\"465\" height=\"440\">
\t\t\t  <!--<![endif]-->
\t\t\t  <param name=\"quality\" value=\"high\" />
\t\t\t  <param name=\"wmode\" value=\"transparent\" />
\t\t\t  <param name=\"swfversion\" value=\"6.0.65.0\" />
\t\t\t  <!--<param name=\"expressinstall\" value=\"Scripts/expressInstall.swf\" />-->
\t\t\t  <param name=\"BGCOLOR\" value=\"#D6D6D6\" />
\t\t\t  <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
\t\t\t  <div>
\t\t\t\t<h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
\t\t\t\t<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Obtener Adobe Flash Player\" width=\"112\" height=\"33\" /></a></p>
\t\t\t  </div>
\t\t\t  <!--[if !IE]>-->
\t\t\t</object>
\t\t<!--<![endif]-->
\t  </object>
\t   <div class=\"sello-icons\">
\t  \t<a class=\"sello-icon-interrogacion\" href=\"/guia/quees/\"></a>
\t  \t<a class=\"sello-icon-key\" href=\"/inicio/\"></a>
\t  \t<a class=\"sello-icon-media\" href=\"/media/\"></a>
\t  </div>
\t  
\t  </div>
\t <div class=\"info-sellos\">
\t  \t<div class=\"text-sellos text-sellos-quees\">
\t  \t\t<p class=\"title\">¿Qué es Dark Rises?</p>
\t  \t\t<p>No basta solamente con conocer el nombre de un nuevo mundo, debes habituarte poco a poco hacia esa nueva realidad en que caerás.</p>
\t\t\t<p>Estas primeras imágenes muestran como es el mundo de Dark Rises y en qué consiste este mundo contemporáneo lleno de tantos sucesos bizarros.</p>
\t\t\t<p>Este primer sello sólo es una bienvenida, pero necesaria.</p>
\t  \t</div>
\t  \t<div class=\"text-sellos text-sellos-media\">
\t  \t\t<p class=\"title\">Media</p>
\t  \t\t<p>Ya vas avanzando en un mundo lleno de oscuridad y vas encontrando información cada vez más valiosa de este ambiente.</p>
\t\t\t<p>Aquí podrás encontrar una gran cantidad de archivos e información sobre todos los personajes involucrados en esta trama.</p>
\t\t\t<p>Cada vez más irás bajando por los peldaños que te llevan hacia lo desconocido, aún no tienes ninguna razón para temer.</p>
\t  \t</div>
\t  \t<div class=\"text-sellos text-sellos-key\">
\t  \t\t<p class=\"title\">Inicio</p>
\t  \t\t<p>Lo que sigue a una cordial bienvenida, es invitarte a ver todas las herramientas que te permitirán explorar, poco a poco, todo lo que el mundo de Dark Rises tiene para ofrecer.</p>
\t\t\t<p>Explore pacientemente, ya que no todo aparecerá instantaneamente. Algunas cosas tomarán más tiempo que otras en aparecer pero inevitablemente aparecerán.</p>
\t\t\t<p>Mire con cuidado donde caminas.</p>
\t  \t</div>
\t  \t<div class=\"menu-sellos\">
\t  \t\t<p class=\"title\">Otros Sellos</p>
\t  \t\t<p class=\"sello-menu-interrogacion sello-menu\"></p>
\t  \t\t<p class=\"sello-menu-key sello-menu\"></p>
\t  \t\t<p class=\"sello-menu-media sello-menu\"></p>
\t  \t</div>
\t  </div>
\t</div>
";
    }

    // line 304
    public function block_lightboxes($context, array $blocks = array())
    {
        // line 305
        echo "\t";
        $this->displayParentBlock("lightboxes", $context, $blocks);
        echo "
\t<div class=\"shadow-inside pop-up text-center\" name=\"principiante\"/>
 \t\t<div class=\"shadow-padding\">
 \t\t\t<div class=\"numeros\">
\t\t\t\t<div class=\"cantidad copperplate white-glow\">
\t\t\t\t\t00000
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<p class=\"black-glow\">
\t\t\t<div class=\"story1\">
\t\t\t";
        // line 316
        echo $this->env->getExtension('translator')->getTranslator()->trans("Todo comenzó una noche. Una estrella fugaz pasó por el oscuro cielo sin que nadie supiera que era exactamente.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story2 padding-top clear\">
\t\t\t";
        // line 319
        echo $this->env->getExtension('translator')->getTranslator()->trans("Con el pasar de los días numerosos fenómenos extraños empezaron a ocurrir, hechos paranormales y aterradores, sucesos que se hicieron habituales en la prensa mundial.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story3 padding-top clear\">
\t\t\t";
        // line 322
        echo $this->env->getExtension('translator')->getTranslator()->trans("Criaturas sobrenaturales surgen de las sombras, están entre los humanos los acechan y los esperan. Todo esto empieza a ser tan común, tan frecuente, que hemos llegado al punto en que uno de estos seres se ha manifestado para contar exactamente lo que ha ocurrido en realidad.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story4 padding-top clear\">
\t\t\t";
        // line 325
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ueyotl, así se hace llamar este ser. Declara que previo al paso de esta estrella algunas criaturas de gran poder pedían sacrificios para así poder abrir un portal. Este sacrificio constaba de la recolección de almas humanas antes del paso de la gran estrella.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story5 padding-top clear\">
\t\t\t";
        // line 328
        echo $this->env->getExtension('translator')->getTranslator()->trans("El portal ha sido abierto, y miles de criaturas han pasado a este mundo, están presentes día y noche, sin embargo la  noche es herramienta de poder para estos seres, esta da desenfreno a sus más aterradores deseos.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story6 padding-top clear\">
\t\t\t";
        // line 331
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sin embargo Ueyotl da una luz, una vana esperanza para cerrar aquel portal  y devolver a aquellas criaturas a su dimensión.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story7 padding-top clear\">
\t\t\t";
        // line 334
        echo $this->env->getExtension('translator')->getTranslator()->trans("Revela que para lograrlo se debe reunir la mayor cantidad de apoyo de todas las personas que lean estas líneas. La condición es una sola, loguearse en www.darkrises.com, así dar apoyo y estar al tanto de cada acontecimiento que se aproxime.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story8 padding-top clear\">
\t\t\t";
        // line 337
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ueyotl  anuncia también que cada 2500 apoyos, él liberará un desafío para todos. No se sabe en qué consiste cada desafío pero sólo queda una manera de averiguarlo.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<div class=\"story9 padding-top clear\">
\t\t\t";
        // line 340
        echo $this->env->getExtension('translator')->getTranslator()->trans("Únete a esta tarea y logremos cerrar el portal.", array(), "messages");
        echo "<br/>
\t\t\t</div>
\t\t\t<br/>
\t\t\t</p>
 \t\t</div>
 \t</div>
";
    }

    // line 348
    public function block_end($context, array $blocks = array())
    {
        // line 349
        echo "\t<div class=\"end\">
\t</div>
\t";
        // line 351
        $this->displayParentBlock("end", $context, $blocks);
        echo "
";
    }

    // line 355
    public function block_javascript($context, array $blocks = array())
    {
        // line 356
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(
\t\t\tfunction(){
\t\t\t\t\$(\".counter-popup\").click(
\t\t\t\t\tfunction(e){
\t\t\t\t\t\t\$(\".shadow\").show();
\t\t\t\t\t\t\$(\".pop-up\").show();
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t
\t\t\t\t\$(\".sello-menu-interrogacion\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-menu-interrogacion-over\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-menu-interrogacion-over\")
\t\t\t\t\t}
\t\t\t\t).click(function(){
\t\t\t\t\t\$(\".text-sellos\").hide();
\t\t\t\t\t\$(\".text-sellos-quees\").show();
\t\t\t\t\t\$(this).addClass(\"sello-menu-interrogacion-stay\");
\t\t\t\t\t\$(\".sello-menu-key\").removeClass(\"sello-menu-key-stay\");
\t\t\t\t\t\$(\".sello-menu-media\").removeClass(\"sello-menu-media-stay\");
\t\t\t\t}).click();
\t\t\t\t
\t\t\t\t\$(\".sello-menu-key\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-menu-key-over\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-menu-key-over\")
\t\t\t\t\t}
\t\t\t\t).click(function(){
\t\t\t\t\t\$(\".text-sellos\").hide();
\t\t\t\t\t\$(\".text-sellos-key\").show();
\t\t\t\t\t\$(this).addClass(\"sello-menu-key-stay\");
\t\t\t\t\t\$(\".sello-menu-interrogacion\").removeClass(\"sello-menu-interrogacion-stay\");
\t\t\t\t\t\$(\".sello-menu-media\").removeClass(\"sello-menu-media-stay\");
\t\t\t\t});;
\t\t\t\t\$(\".sello-menu-media\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-menu-media-over\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-menu-media-over\")
\t\t\t\t\t}
\t\t\t\t).click(function(){
\t\t\t\t\t\$(\".text-sellos\").hide();
\t\t\t\t\t\$(\".text-sellos-media\").show();
\t\t\t\t\t\$(this).addClass(\"sello-menu-media-stay\")
\t\t\t\t\t\$(\".sello-menu-interrogacion\").removeClass(\"sello-menu-interrogacion-stay\");
\t\t\t\t\t\$(\".sello-menu-key\").removeClass(\"sello-menu-key-stay\");
\t\t\t\t});;
\t\t\t\t
\t\t\t\t\$(\".sello-icon-interrogacion\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-icon-interrogacion-hover\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-icon-interrogacion-hover\")
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$(\".sello-icon-key\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-icon-key-hover\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-icon-key-hover\")
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$(\".sello-icon-media\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-icon-key-media\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-icon-key-media\")
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t
\t\t\t\tsetInterval(
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"http://lilith.darkrises.com/backend.php/userinfo/getsouls/\",
\t\t\t\t\t\ttype: \"GET\",
\t\t\t\t\t\tcrossDomain : true,
\t\t\t\t\t\tdataType: \"jsonp\",
\t\t\t\t\t\tsuccess: function(object){
\t\t\t\t\t\t\tif(object[\"souls\"] < 1000)
\t\t\t\t\t\t\t\tobject[\"souls\"] = \"00\" + object[\"souls\"];
\t\t\t\t\t\t\telse if(object[\"souls\"] < 10000)\t
\t\t\t\t\t\t\t\tobject[\"souls\"] = \"0\" + object[\"souls\"];
\t\t\t\t\t\t\tobject[\"souls\"] = object[\"souls\"].split(\"\");
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(\".cantidad\").html('<img src=\"/img/numeros/'+object[\"souls\"][0]+'.png\" class=\"number\"/>'+
\t\t\t\t\t\t\t\t'<img src=\"/img/numeros/'+object[\"souls\"][1]+'.png\" class=\"number\"/>'+
\t\t\t\t\t\t\t\t'<img src=\"/img/numeros/'+object[\"souls\"][2]+'.png\" class=\"number\"/>'+
\t\t\t\t\t\t\t\t'<img src=\"/img/numeros/'+object[\"souls\"][3]+'.png\" class=\"number\"/>'+
\t\t\t\t\t\t\t\t'<img src=\"/img/numeros/'+object[\"souls\"][4]+'.png\" class=\"number\"/>'
\t\t\t\t\t\t\t);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(){alert(\"Fail!\")}
\t\t\t\t\t}),
\t\t\t\t\t300000
\t\t\t\t);
\t\t\t});
\t</script>
\t";
        // line 462
        if (isset($context["session"])) { $_session_ = $context["session"]; } else { $_session_ = null; }
        if (($_session_ == "first")) {
            // line 463
            echo "\t<script type=\"text/javascript\">
\t\t\$(document).ready(
\t\t\tfunction(){
\t\t\t\t\$(\".counter-popup\").click();
\t\t\t}
\t\t);
\t</script>
\t";
        }
    }

    // line 473
    public function block_hidden($context, array $blocks = array())
    {
        // line 474
        echo "\t";
        $this->displayParentBlock("hidden", $context, $blocks);
        echo "
\t<img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/over.png"), "html", null, true);
        echo "\"/>
\t<img src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/over.png"), "html", null, true);
        echo "\"/>
\t<img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/over.png"), "html", null, true);
        echo "\"/>
\t<img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/pop-fondo.png"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:evento-sello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 478,  648 => 477,  644 => 476,  640 => 475,  635 => 474,  632 => 473,  620 => 463,  617 => 462,  507 => 356,  504 => 355,  498 => 351,  494 => 349,  491 => 348,  480 => 340,  474 => 337,  468 => 334,  462 => 331,  456 => 328,  450 => 325,  444 => 322,  438 => 319,  432 => 316,  417 => 305,  414 => 304,  359 => 252,  347 => 243,  334 => 232,  331 => 231,  289 => 192,  283 => 189,  277 => 186,  269 => 181,  263 => 178,  257 => 175,  249 => 170,  243 => 167,  237 => 164,  204 => 134,  194 => 127,  186 => 122,  176 => 115,  168 => 110,  158 => 103,  135 => 83,  89 => 40,  82 => 36,  73 => 30,  61 => 21,  50 => 13,  41 => 7,  34 => 4,  31 => 3,);
    }
}
