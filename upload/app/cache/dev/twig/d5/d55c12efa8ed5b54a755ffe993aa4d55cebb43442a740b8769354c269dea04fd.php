<?php

/* UtilisateursBundle:Modules:utilisateurDeconnecte.html.twig */
class __TwigTemplate_576b9aa83b1cc949562d3d3dbd4fe2f08ef26d85a1c3e1236f6782e7cb6a1e49 extends Twig_Template
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
        echo "<div class=\"well\">
\t<ul class=\"nav nav-list\">
\t\t<li>
\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
\t\t</li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Modules:utilisateurDeconnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="well">*/
/* 	<ul class="nav nav-list">*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
