<?php

/* AccueilBundle:Modules:menu.html.twig */
class __TwigTemplate_a412948a0fcf31ec0de4b56a1b542e7f77d1a6ed835d33924a7adcf951273e37 extends Twig_Template
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
        echo "<style>
.menu li {
\tdisplay:inline-block;
\tpadding:0px 30px 0px 30px;
}
.menu li:hover {
\tbackground:#CCCCCC;
}
</style>
<div class=\"menu\" style=\"height:25px; padding:5px 20px 0px 20px; margin:0px; background:rgba(220,220,220,0.8);\">
\t<ul style=\"padding-left:30px;\">
\t\t<li>
\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("accueil_homepage");
        echo "\">Accueil</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("index_mur");
        echo "\">Mur</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("accueil_bombage");
        echo "\">Bombage</a>
\t\t</li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "AccueilBundle:Modules:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  39 => 16,  33 => 13,  19 => 1,);
    }
}
/* <style>*/
/* .menu li {*/
/* 	display:inline-block;*/
/* 	padding:0px 30px 0px 30px;*/
/* }*/
/* .menu li:hover {*/
/* 	background:#CCCCCC;*/
/* }*/
/* </style>*/
/* <div class="menu" style="height:25px; padding:5px 20px 0px 20px; margin:0px; background:rgba(220,220,220,0.8);">*/
/* 	<ul style="padding-left:30px;">*/
/* 		<li>*/
/* 			<a href="{{ path('accueil_homepage') }}">Accueil</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('index_mur') }}">Mur</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('accueil_bombage') }}">Bombage</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
