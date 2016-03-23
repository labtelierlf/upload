<?php

/* UtilisateursBundle:Modules:utilisateurConnecte.html.twig */
class __TwigTemplate_b879e63546be438e04933a5c1f9ca1822eadc853f96a3df6c8f8326de1a34dcb extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("accueil_homepage");
        echo "\">Accueil</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Modifier mes informations</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
\t\t</li>
\t\t<!--
\t\t<li>
\t\t\t<a href=\"#\">Mes factures</a>
\t\t</li>
\t\t-->
\t\t<li>
\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("membre_homepage");
        echo "\">Espace membre</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a>
\t\t</li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Modules:utilisateurConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  53 => 21,  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="well">*/
/* 	<ul class="nav nav-list">*/
/* 		<li>*/
/* 			<a href="{{ path('accueil_homepage') }}">Accueil</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_profile_edit') }}">Modifier mes informations</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_change_password') }}">Changer mon mot de passe</a>*/
/* 		</li>*/
/* 		<!--*/
/* 		<li>*/
/* 			<a href="#">Mes factures</a>*/
/* 		</li>*/
/* 		-->*/
/* 		<li>*/
/* 			<a href="{{ path('membre_homepage') }}">Espace membre</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
