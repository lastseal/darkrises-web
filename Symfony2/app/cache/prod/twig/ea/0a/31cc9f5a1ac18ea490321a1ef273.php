<?php

/* DarkRisesWebBundle:Default:javascriptMenu.html.twig */
class __TwigTemplate_ea0a31cc9f5a1ac18ea490321a1ef273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
\tvar actualPage = \"";
        // line 2
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "getRequestUri"), "html", null, true);
        echo "\";
\tvar loginText = \"";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("facebook", array(), "messages");
        echo "\";
</script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/facebook.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"http://code.jquery.com/jquery-1.7.2.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.xdomainajax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\tjQuery(document).ready(
\t\tfunction(){
\t\t
\t\t\tif(actualPage != \"/eventos/\"){
\t\t\t\tdate = new Date();
\t\t\t\thora = date.getHours();
\t\t\t\t
\t\t\t\tif(hora >= 8 && hora < 14)
\t\t\t\t\t\$(\"body\").css(\"background\", 'url(\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/fondos/dia.png"), "html", null, true);
        echo "\") no-repeat center top');
\t\t\t\telse if(hora >= 14 && hora < 22)
\t\t\t\t\t\$(\"body\").css(\"background\", 'url(\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/fondos/tarde.png"), "html", null, true);
        echo "\") no-repeat center top');
\t\t\t\telse
\t\t\t\t\t\$(\"body\").css(\"background\", 'url(\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/fondos/noche.png"), "html", null, true);
        echo "\") no-repeat center top');
\t\t\t}
\t\t\t
\t\t\tjQuery(\"#idioma\").click(
\t\t\t\tfunction(){
\t\t\t\t\tselect = jQuery(\"#select-idioma\");
\t\t\t\t\tif(select.css(\"display\") == \"block\"){
\t\t\t\t\t\tselect.hide();
\t\t\t\t\t\t\$(\"#flecha-idioma\").removeClass(\"flecha-arriba\").addClass(\"flecha-abajo\");
\t\t\t\t\t}else{
\t\t\t\t\t\tselect.show();
\t\t\t\t\t\t\$(\"#flecha-idioma\").addClass(\"flecha-arriba\").removeClass(\"flecha-abajo\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\tjQuery(\"#select-idioma\").click(function(){jQuery(\"#idioma\").click();});
\t\t\t
\t\t\t\$(\".ir-al-juego\").hover(
\t\t\t\tfunction(){\$(\".proximamente\").show()},
\t\t\t\tfunction(){\$(\".proximamente\").hide()}
\t\t\t);
\t\t\t
\t\t\t\$(\".idioma-english\").hover(function(){\$(this).addClass(\"idioma-english-hover\")},function(){\$(this).removeClass(\"idioma-english-hover\")});
\t\t\t\$(\".idioma-spanish\").hover(function(){\$(this).addClass(\"idioma-spanish-hover\")},function(){\$(this).removeClass(\"idioma-spanish-hover\")});
\t\t\t
\t\t\t\$(\".button-inicio\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-inicio-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-inicio-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".button-guia\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-guia-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-guia-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".button-media\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-media-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-media-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".button-eventos\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-eventos-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-eventos-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".shadow-inside\").prepend(\"<div class='close'></div>\");
\t\t\t
\t\t\t\$(\".shadow\").height(\$(\"body\").height()).click(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).hide();
\t\t\t\t\t\$(\".shadow-inside\").hide();
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t
\t\t\t\$(\".close\").click(
\t\t\t\tfunction(){
\t\t\t\t\t\$(\".shadow\").hide();
\t\t\t\t\t\$(\".shadow-inside\").hide();
\t\t\t\t}
\t\t\t).hover(
\t\t\t\tfunction(){\$(this).addClass(\"close-over\")},
\t\t\t\tfunction(){\$(this).removeClass(\"close-over\")}
\t\t\t);
\t\t}
\t);
</script>";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:javascriptMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  48 => 17,  25 => 3,  54 => 10,  50 => 9,  42 => 7,  131 => 33,  100 => 28,  96 => 27,  70 => 21,  66 => 20,  56 => 15,  49 => 13,  38 => 6,  35 => 7,  23 => 3,  20 => 2,  134 => 65,  119 => 57,  109 => 52,  84 => 38,  74 => 33,  58 => 21,  52 => 22,  46 => 8,  40 => 16,  30 => 5,  26 => 3,  22 => 2,  17 => 1,  194 => 60,  191 => 59,  188 => 58,  184 => 56,  181 => 55,  173 => 49,  171 => 48,  168 => 47,  165 => 46,  160 => 51,  158 => 46,  155 => 45,  152 => 44,  147 => 36,  144 => 71,  137 => 38,  130 => 32,  127 => 62,  123 => 30,  120 => 29,  117 => 32,  113 => 54,  110 => 25,  107 => 30,  102 => 17,  99 => 46,  95 => 13,  92 => 43,  89 => 11,  83 => 61,  81 => 58,  78 => 26,  76 => 54,  73 => 53,  71 => 32,  67 => 42,  62 => 19,  59 => 27,  51 => 21,  47 => 19,  45 => 12,  39 => 11,  27 => 5,  385 => 276,  382 => 275,  376 => 272,  371 => 271,  368 => 270,  362 => 267,  358 => 266,  353 => 265,  350 => 264,  336 => 253,  326 => 246,  300 => 223,  274 => 200,  253 => 182,  232 => 164,  226 => 161,  219 => 158,  216 => 157,  178 => 54,  138 => 84,  135 => 35,  115 => 66,  94 => 48,  72 => 29,  64 => 28,  57 => 24,  41 => 14,  34 => 5,  31 => 7,);
    }
}
