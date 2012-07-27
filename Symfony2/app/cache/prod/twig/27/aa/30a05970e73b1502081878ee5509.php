<?php

/* DarkRisesWebBundle:Default:base.html.twig */
class __TwigTemplate_27aa30a05970e73b1502081878ee5509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'lightboxes' => array($this, 'block_lightboxes'),
            'menu' => array($this, 'block_menu'),
            'idioma' => array($this, 'block_idioma'),
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
            'end' => array($this, 'block_end'),
            'footer' => array($this, 'block_footer'),
            'hidden' => array($this, 'block_hidden'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!Doctype html>
<html xmlns:fb=\"http://www.facebook.com/2008/fbml\"
      xmlns:og=\"http://opengraphprotocol.org/schema/\">

<meta property=\"fb:app_id\" content=\"233902406664495\" />
<meta property=\"og:image\" content=\"http://photos-g.ak.fbcdn.net/photos-ak-snc7/v85006/135/233902406664495/app_1_233902406664495_865765470.gif\" />
<meta property=\"og:description\" content=\"La oscuridad se acerca.\" />
\t<head>
\t\t<title>Dark Rises</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t</head>
\t<body>
\t";
        // line 16
        $this->displayBlock('lightboxes', $context, $blocks);
        // line 19
        echo "\t\t<div class=\"page\">
\t\t\t<div class=\"head\">
\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Dark Rises\"/>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "\t\t<div class=\"page main-content\">
\t\t\t";
        // line 28
        $this->displayBlock('idioma', $context, $blocks);
        // line 31
        echo "\t\t\t";
        $this->displayBlock('main', $context, $blocks);
        // line 42
        echo "\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t";
        // line 44
        $this->displayBlock('end', $context, $blocks);
        // line 53
        echo "\t\t<div style=\"display: none;\">
\t\t\t";
        // line 54
        $this->displayBlock('hidden', $context, $blocks);
        // line 57
        echo "\t\t</div>
\t\t";
        // line 58
        $this->displayBlock('javascript', $context, $blocks);
        // line 61
        echo "\t\t
\t</body>
</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:css.html.twig")->display($context);
        // line 13
        echo "\t\t";
    }

    // line 16
    public function block_lightboxes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t<div class='shadow'></div>
\t";
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "\t\t  ";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:menu.html.twig")->display($context);
        // line 26
        echo "\t\t";
    }

    // line 28
    public function block_idioma($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:idioma.html.twig")->display($context);
        // line 30
        echo "\t\t\t";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t<div class=\"body\">
\t\t\t\t
\t\t\t\t<div class=\"main\">
\t\t\t\t\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "\t\t\t\t\t
\t\t\t\t\t";
    }

    // line 44
    public function block_end($context, array $blocks = array())
    {
        // line 45
        echo "\t\t<div class=\"footer up\">
\t\t\t";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "\t\t</div>
\t\t";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "\t\t\t<div class=\"foot yellow\">
\t\t\t";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dark Rises y todas las imagenes asociadas con Dark Rises son propiedad de © Copyright 2012 Last Seal S A. Todos los Derechos Reservados", array(), "messages");
        // line 49
        echo "\t\t\t</div>
\t\t\t";
    }

    // line 54
    public function block_hidden($context, array $blocks = array())
    {
        // line 55
        echo "\t\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:hideMenu.html.twig")->display($context);
        // line 56
        echo "\t\t\t";
    }

    // line 58
    public function block_javascript($context, array $blocks = array())
    {
        // line 59
        echo "\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:javascriptMenu.html.twig")->display($context);
        // line 60
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 59,  188 => 58,  184 => 56,  181 => 55,  178 => 54,  173 => 49,  171 => 48,  165 => 46,  160 => 51,  155 => 45,  152 => 44,  147 => 36,  144 => 35,  137 => 38,  130 => 32,  127 => 31,  123 => 30,  120 => 29,  117 => 28,  113 => 26,  110 => 25,  107 => 24,  102 => 17,  99 => 16,  95 => 13,  92 => 12,  83 => 61,  81 => 58,  78 => 57,  76 => 54,  71 => 44,  67 => 42,  64 => 31,  62 => 28,  59 => 27,  57 => 24,  51 => 21,  47 => 19,  45 => 16,  39 => 11,  27 => 1,  606 => 459,  602 => 458,  598 => 457,  594 => 456,  589 => 455,  586 => 454,  574 => 444,  571 => 443,  461 => 337,  458 => 336,  452 => 332,  448 => 330,  445 => 329,  387 => 275,  384 => 274,  329 => 222,  317 => 213,  304 => 202,  301 => 201,  289 => 192,  283 => 189,  277 => 186,  269 => 181,  263 => 178,  257 => 175,  249 => 170,  243 => 167,  237 => 164,  204 => 134,  194 => 60,  186 => 122,  176 => 115,  168 => 47,  158 => 46,  135 => 35,  89 => 11,  82 => 36,  73 => 53,  61 => 21,  50 => 13,  41 => 14,  34 => 4,  31 => 3,);
    }
}