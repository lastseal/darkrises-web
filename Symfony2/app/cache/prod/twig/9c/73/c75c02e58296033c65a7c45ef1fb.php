<?php

/* DarkRisesWebBundle:Default:menu.html.twig */
class __TwigTemplate_9c73c75c02e58296033c65a7c45ef1fb extends Twig_Template
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
        echo "<div class=\"menu\">
\t<div class=\"header\">
\t\t<div>
\t\t\t<ul class=\"nav\">
\t\t\t\t<li>
\t\t\t\t\t<div class=\"menu-buttons button-inicio\">
\t\t\t\t\t\t<a href=\"/inicio/\" class=\"menu-buttons\">
\t\t\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Inicio", array(), "messages");
        echo "  </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li><div class=\"menu-buttons button-guia\"><a href=\"/guia/\" class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Guia del Juego", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-media\"><a href=\"/media/\" class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Media", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-comunidad\"><a class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside off\"> ";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comunidad", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-biblioteca\"><a class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside off\"> ";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Biblioteca", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-comprar\"><a class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside off\"> ";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comprar", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-eventos\"><a href=\"/eventos/\" class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Eventos", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"login\">
\t\t\t\t\t<div class=\"login-inside\" id=\"facebook\">
\t\t\t\t\t\t";
        // line 32
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 33
            echo "\t\t\t\t\t\t<span class=\"facebook-button\">
\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/botones/facebook-empty.png"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right padding-top\">
\t\t\t\t\t\t\t<div id=\"auth-loginlink\"><div id=\"auth-loginlink-inside\">";
            // line 38
            echo $this->env->getExtension('translator')->getTranslator()->trans("facebook", array(), "messages");
            echo "</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"facebook-button-login\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"left facebook-photo\">
\t\t\t\t\t\t\t<img src=\"https://graph.facebook.com/";
            // line 43
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "username", array(), "array"), "html", null, true);
            echo "/picture\" id=\"facebook-picture\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p id=\"facebook-name\">";
            // line 46
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "name", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t<div class=\"facebook-logout\">Cerrar Sesión</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t<span class=\"facebook-button\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t<img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/botones/facebook-empty.png"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right padding-top\">
\t\t\t\t\t\t\t<div id=\"auth-loginlink\"><div id=\"auth-loginlink-inside\">";
            // line 57
            echo $this->env->getExtension('translator')->getTranslator()->trans("facebook", array(), "messages");
            echo "</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"facebook-button-login\">
\t\t\t\t\t\t<div class=\"left facebook-photo\">
\t\t\t\t\t\t\t<img src=\"https://graph.facebook.com/";
            // line 62
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "username", array(), "array"), "html", null, true);
            echo "/picture\" id=\"facebook-picture\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p id=\"facebook-name\">";
            // line 65
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "name", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t<div class=\"facebook-logout\">Cerrar Sesión</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t</div></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  119 => 57,  109 => 52,  84 => 38,  74 => 33,  58 => 25,  52 => 22,  46 => 19,  40 => 16,  34 => 13,  26 => 8,  22 => 2,  17 => 1,  194 => 60,  191 => 59,  188 => 58,  184 => 56,  181 => 55,  173 => 49,  171 => 48,  168 => 47,  165 => 46,  160 => 51,  158 => 46,  155 => 45,  152 => 44,  147 => 36,  144 => 71,  137 => 38,  135 => 35,  130 => 32,  127 => 62,  120 => 29,  117 => 28,  107 => 24,  102 => 17,  99 => 46,  92 => 43,  89 => 11,  81 => 58,  76 => 54,  71 => 32,  67 => 42,  64 => 28,  62 => 28,  59 => 27,  57 => 24,  51 => 21,  47 => 19,  45 => 16,  41 => 14,  39 => 11,  178 => 54,  175 => 64,  172 => 63,  166 => 59,  161 => 57,  156 => 56,  151 => 54,  146 => 53,  143 => 52,  138 => 50,  133 => 47,  128 => 45,  123 => 30,  118 => 42,  113 => 54,  110 => 25,  105 => 38,  100 => 35,  95 => 13,  91 => 32,  87 => 31,  83 => 61,  78 => 35,  73 => 53,  69 => 26,  65 => 25,  61 => 24,  56 => 23,  53 => 22,  48 => 20,  30 => 4,  27 => 1,);
    }
}
