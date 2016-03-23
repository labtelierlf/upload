<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7f678a41141804f183f993138cc22751754466dbcdb78ad2b968862fd1e19694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"span12\">
\t\t\t\t<!--<?php include '../layout/col-left-co.php'; ?>-->
\t\t\t\t<h2>Erreur <i class=\"icon-thumbs-down\"></i></h2>
\t\t\t\t<div class=\"liens span4 bords\">
\t\t\t\t\t<br/>
    \t\t\t\t<div>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    \t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 20
        echo "<div id=\"entete\" class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion <i class=\"icon-unlock-alt\"></i></h2>
\t\t\t<div class=\"liens span4 bords\">
\t\t\t\t<h4>Pas encore inscrit ?</h4>
\t\t\t\t<em>
\t\t\t\t\tnous vous invitons à vous inscrire<br />
\t\t\t\t\tafin de profiter de toutes les fonctionnalités du site.
\t\t\t\t</em>
\t\t\t\t<br /><br />
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"parent\">
\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"bouton children\">S'inscrire</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"bloc\" class=\"liens span4 offset2 bords\">
\t\t\t\t<h4>Connexion</h4>
\t\t\t\t<form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t<label>Nom d'utilisateur</label>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t<label>Mot de passe</label>
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t<div class=\"parent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"bouton children\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"liens span4 bords\">
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"parent\">
\t\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"bouton children\">Mot de passe perdu ?</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 56,  93 => 48,  84 => 42,  80 => 41,  75 => 39,  66 => 33,  51 => 20,  42 => 14,  33 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="span12">*/
/* 				<!--<?php include '../layout/col-left-co.php'; ?>-->*/
/* 				<h2>Erreur <i class="icon-thumbs-down"></i></h2>*/
/* 				<div class="liens span4 bords">*/
/* 					<br/>*/
/*     				<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
/* <div id="entete" class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Connexion <i class="icon-unlock-alt"></i></h2>*/
/* 			<div class="liens span4 bords">*/
/* 				<h4>Pas encore inscrit ?</h4>*/
/* 				<em>*/
/* 					nous vous invitons à vous inscrire<br />*/
/* 					afin de profiter de toutes les fonctionnalités du site.*/
/* 				</em>*/
/* 				<br /><br />*/
/* 				<div class="wrapper">*/
/* 					<div class="parent">*/
/* 						<a href="{{ path('fos_user_registration_register') }}" class="bouton children">S'inscrire</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="bloc" class="liens span4 offset2 bords">*/
/* 				<h4>Connexion</h4>*/
/* 				<form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 					<label>Nom d'utilisateur</label>*/
/* 					<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 					<input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 					<label>Mot de passe</label>*/
/* 					<input type="password" id="password" name="_password" required="required" />*/
/* 					<br/>*/
/* 					<div class="wrapper">*/
/* 						<div class="parent">*/
/* 							<input type="submit" class="bouton children" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="liens span4 bords">*/
/* 				<div class="wrapper">*/
/* 					<div class="parent">*/
/* 						<a href="{{ path('fos_user_resetting_request') }}" class="bouton children">Mot de passe perdu ?</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
