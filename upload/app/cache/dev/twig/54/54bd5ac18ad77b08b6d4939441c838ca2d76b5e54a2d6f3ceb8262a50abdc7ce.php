<?php

/* AccueilBundle:Default:index.html.twig */
class __TwigTemplate_1bfb149bc48daa7e3eb08639f4c4d229541d3d2234ddcc6fe5335f88d1219cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AccueilBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div id=\"entete\">
\t<h1 style=\"margin-left:20px\">Page d'accueil <i class=\"icon-home\"></i></h1>
\t\t";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 6
            echo "\t\t\t";
            $this->loadTemplate("UtilisateursBundle:Modules:utilisateurConnecte.html.twig", "AccueilBundle:Default:index.html.twig", 6)->display($context);
            // line 7
            echo "\t\t";
        } else {
            // line 8
            echo "\t\t\t";
            $this->loadTemplate("UtilisateursBundle:Modules:utilisateurDeconnecte.html.twig", "AccueilBundle:Default:index.html.twig", 8)->display($context);
            // line 9
            echo "\t\t";
        }
        // line 10
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "AccueilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* 	<div id="entete">*/
/* 	<h1 style="margin-left:20px">Page d'accueil <i class="icon-home"></i></h1>*/
/* 		{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 			{% include 'UtilisateursBundle:Modules:utilisateurConnecte.html.twig' %}*/
/* 		{% else %}*/
/* 			{% include 'UtilisateursBundle:Modules:utilisateurDeconnecte.html.twig' %}*/
/* 		{% endif %}*/
/* 	</div>*/
/* {% endblock %}*/
