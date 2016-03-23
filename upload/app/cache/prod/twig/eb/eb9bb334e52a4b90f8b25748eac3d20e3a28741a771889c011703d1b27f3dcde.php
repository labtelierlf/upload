<?php

/* ::base.html.twig */
class __TwigTemplate_fbeac4fe4659599ce532738041cf3d3baf7e11a6b12bfd45691a34af0e91beda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"/>
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<script>
\t\t\tfunction fermerConfirmation() {
\t\t\t\tdocument.getElementById('conteneurInsertConfirmation').style.display = 'none';
\t\t\t\tlocation.href = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("membre_finConfirmation");
        echo "\";
\t\t\t}
\t\t\tfunction bascule() {
\t\t\t\tif(document.getElementById('conteneurInsertProduction').style.display == 'inline-block') {
\t\t\t\t\tdocument.getElementById('conteneurInsertProduction').style.display = 'none';
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tdocument.getElementById('conteneurInsertProduction').style.display = 'inline-block';
\t\t\t\t\tdocument.getElementById('conteneurInsertInscription').style.display = 'none';
\t\t\t\t\tdocument.getElementById('conteneurInsertConnexion').style.display = 'none';
\t\t\t\t}
\t\t\t}
\t\t</script>
    \t<div id=\"header\" class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t\t<div class=\"navbar-inner\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div style=\"text-align:center; cursor:pointer;\"><a class=\"brand\" onclick=\"bascule()\">Eat what you kill<br/>production</a></div>
\t\t\t\t\t<div  class=\"navbar-form pull-right\">
\t\t\t\t\t\t<div class=\"entretoise\"></div>
\t\t\t\t\t\t";
        // line 42
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "\t\t\t\t\t\t\t<button class=\"bouton\" id=\"mon_compte\" style=\"display:inline-block;\">mon compte</button>
\t\t\t\t\t\t\t<button class=\"bouton\" id=\"deconnexion\" style=\"display:inline-block;\">déconnexion</button>
\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t<button class=\"bouton\" id=\"connexion\" style=\"display:inline-block;\">Connexion</button>
\t\t\t\t\t\t\t<button class=\"bouton\" id=\"inscription\" style=\"display:inline-block;\">Inscription</button>
\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 53
            echo "\t\t\t\t";
            $this->loadTemplate("AccueilBundle:Modules:menuConnecte.html.twig", "::base.html.twig", 53)->display($context);
            // line 54
            echo "\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t";
            $this->loadTemplate("AccueilBundle:Modules:menu.html.twig", "::base.html.twig", 55)->display($context);
            // line 56
            echo "\t\t\t";
        }
        // line 57
        echo "\t\t\t<div class=\"bords paddingRight offset1 span4\" id=\"conteneurInsertProduction\" style=\"display:none; background:#FFFFFF; position:relative; left:-2px;\">
\t\t\t\t<div style=\"text-align:left; padding:0px; margin-top:10px;\"><i class=\"icon-remove\" style=\"cursor:pointer;\" onclick=\"bascule()\"></i></div><br/>
\t\t\t\t<p><strong style=\"text-align:center;\">Réalisation sous Symfony 2</strong></p>
\t\t\t\t<br/>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;&nbsp;- Customisation de FOSUserBundle (gestion de la connection sécurisée des utilisateurs),
\t\t\t\t\tpour l'affichage en ajax des formulaires dans des modales accessibles à partir de chaque pages du site,
\t\t\t\t\tavec redirection sur celles-ci après confirmation par mail de l'inscription.
\t\t\t\t</P>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;&nbsp;- Upload d'images avec gestion pour chaque utilisateur de son dossier images.
\t\t\t\t\tAdaptation du CRUD (Create, Read, Update, Delete) pour la gestion du type 'file', ainsi que
\t\t\t\t\tle contrôle en php du contenu du dossier pour éviter l'écrasement des images.
\t\t\t\t\tL'utilisateur peut éditer à chaque instant ses images qui se retrouvent dans la bibliothèque
\t\t\t\t\tdu site, s'il efface une image, elle n'est plus disponible mais reste archivée pour l'affichage
\t\t\t\t\tdes anciens messages du mur.
\t\t\t\t\tPour voir le fonctionnement avec du contenu, se connecter avec login monsieur, mot de passe momo.
\t\t\t\t</P>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;&nbsp;- Gestion drag and drop dynamique des images de la bibliothèque.
\t\t\t\t</P>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;&nbsp;- Adaptation en ajax du bundle 'KnpPaginator'.
\t\t\t\t</P>
\t\t\t</div>
\t\t\t<div id=\"conteneurInsertConnexion\" style=\"text-align:center; display:none;\">
\t\t\t\t<br/><br/>
\t\t\t\t<div id=\"infosConnexion\"></div>
\t\t\t\t<div id=\"cibleConnexion\" style=\"background:#EEEEFF; display:inline-block;\"></div>
\t\t\t</div>
\t\t\t<div id=\"conteneurInsertInscription\" style=\"text-align:center; display:none;\">
\t\t\t\t<div id=\"infosInscription\"></div>
\t\t\t\t<div id=\"cibleInscription\" style=\"background:#EEEEFF; display:inline-block;\"></div>
\t\t\t</div>
\t\t\t<div id=\"conteneurInsertConfirmation\" style=\"text-align:center; inline-block;\">
\t\t\t\t";
        // line 92
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "retour"), "method", false, true), "message", array(), "any", true, true)) {
            // line 93
            echo "\t\t\t\t\t<br/><br/>
\t\t\t\t\t<div id=\"cibleConfirmation\" style=\"background:#EEEEFF; display:inline-block;\">
\t\t\t\t\t\t<div class=\"container\" style=\"display:inline-block; width:400px;\">
\t\t\t\t\t\t\t<div style=\"text-align:left; padding:20px;\"><i class=\"icon-remove\" style=\"cursor:pointer;\" onclick=\"fermerConfirmation()\"></i></div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<h2 style=\"background:#FFFFFF; display:inline-block;\">Confirmation <i class=\"icon-thumbs-up\"></i></h2>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div class=\"liens paddingRight bords\" style=\"background:#FFFFFF; display:inline-block; margin:20px 20px 40px 20px; padding-bottom:20px;\">
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<div style=\"display:inline-block;\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "retour"), "method"), "message", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 107
        echo "\t\t\t</div>
\t\t</div>
\t\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "\t\t";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 113
            echo "\t\t\t<script>
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$('#mon_compte').on('click', function() {
\t\t\t\t\t\tlocation.href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\";
\t\t\t\t\t});
\t\t\t\t\t\$('#deconnexion').on('click', function() {
\t\t\t\t\t\tlocation.href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\";
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t";
        } else {
            // line 124
            echo "\t\t\t<script>
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$('#connexion').on('click', function() {
\t\t\t\t\t\tdocument.getElementById('conteneurInsertInscription').style.display = 'none';
\t\t\t\t\t\tdocument.getElementById('conteneurInsertConfirmation').style.display = 'none';
\t\t\t\t\t\tdocument.getElementById('conteneurInsertProduction').style.display = 'none';
\t\t\t\t\t\tdocument.getElementById('conteneurInsertConnexion').style.display = 'block';
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t\t\turl: \"";
            // line 133
            echo $this->env->getExtension('routing')->getPath("membre_connexion");
            echo "\",
\t\t\t\t\t\t\tsuccess: function(returnData){
\t\t\t\t\t\t\t\t\$('#cibleConnexion').html(returnData['html']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t\$('#inscription').on('click', function() {
\t\t\t\t\t\tdocument.getElementById('conteneurInsertConnexion').style.display = 'none';
\t\t\t\t\t\tdocument.getElementById('conteneurInsertConfirmation').style.display = 'none';
\t\t\t\t\t\tdocument.getElementById('conteneurInsertProduction').style.display = 'none';
\t\t\t\t\t\tdocument.getElementById('conteneurInsertInscription').style.display = 'block';
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t\t\turl: \"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("membre_inscription");
            echo "\",
\t\t\t\t\t\t\tsuccess: function(returnData){
\t\t\t\t\t\t\t\t\$('#cibleInscription').html(returnData['html']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
\t\t";
        }
        // line 155
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 156
        echo "\t</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 155,  272 => 111,  267 => 11,  261 => 10,  256 => 156,  253 => 155,  241 => 146,  225 => 133,  214 => 124,  206 => 119,  200 => 116,  195 => 113,  192 => 112,  190 => 111,  186 => 110,  182 => 109,  178 => 107,  170 => 102,  159 => 93,  157 => 92,  120 => 57,  117 => 56,  114 => 55,  111 => 54,  108 => 53,  106 => 52,  101 => 49,  96 => 46,  91 => 43,  89 => 42,  62 => 18,  52 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8"/>*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* 		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>*/
/* 		<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}"/>*/
/* 		<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>*/
/* 		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>*/
/*         <title>{% block title %}Bienvenue{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* 		<script>*/
/* 			function fermerConfirmation() {*/
/* 				document.getElementById('conteneurInsertConfirmation').style.display = 'none';*/
/* 				location.href = "{{ path('membre_finConfirmation') }}";*/
/* 			}*/
/* 			function bascule() {*/
/* 				if(document.getElementById('conteneurInsertProduction').style.display == 'inline-block') {*/
/* 					document.getElementById('conteneurInsertProduction').style.display = 'none';*/
/* 				}*/
/* 				else {*/
/* 					document.getElementById('conteneurInsertProduction').style.display = 'inline-block';*/
/* 					document.getElementById('conteneurInsertInscription').style.display = 'none';*/
/* 					document.getElementById('conteneurInsertConnexion').style.display = 'none';*/
/* 				}*/
/* 			}*/
/* 		</script>*/
/*     	<div id="header" class="navbar navbar-inverse navbar-fixed-top">*/
/* 			<div class="navbar-inner">*/
/* 				<div class="container">*/
/* 					<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					</button>*/
/* 					<div style="text-align:center; cursor:pointer;"><a class="brand" onclick="bascule()">Eat what you kill<br/>production</a></div>*/
/* 					<div  class="navbar-form pull-right">*/
/* 						<div class="entretoise"></div>*/
/* 						{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 							<button class="bouton" id="mon_compte" style="display:inline-block;">mon compte</button>*/
/* 							<button class="bouton" id="deconnexion" style="display:inline-block;">déconnexion</button>*/
/* 						{% else %}*/
/* 							<button class="bouton" id="connexion" style="display:inline-block;">Connexion</button>*/
/* 							<button class="bouton" id="inscription" style="display:inline-block;">Inscription</button>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 				{% include 'AccueilBundle:Modules:menuConnecte.html.twig' %}*/
/* 			{% else %}*/
/* 				{% include 'AccueilBundle:Modules:menu.html.twig' %}*/
/* 			{% endif %}*/
/* 			<div class="bords paddingRight offset1 span4" id="conteneurInsertProduction" style="display:none; background:#FFFFFF; position:relative; left:-2px;">*/
/* 				<div style="text-align:left; padding:0px; margin-top:10px;"><i class="icon-remove" style="cursor:pointer;" onclick="bascule()"></i></div><br/>*/
/* 				<p><strong style="text-align:center;">Réalisation sous Symfony 2</strong></p>*/
/* 				<br/>*/
/* 				<p>*/
/* 					&nbsp;&nbsp;- Customisation de FOSUserBundle (gestion de la connection sécurisée des utilisateurs),*/
/* 					pour l'affichage en ajax des formulaires dans des modales accessibles à partir de chaque pages du site,*/
/* 					avec redirection sur celles-ci après confirmation par mail de l'inscription.*/
/* 				</P>*/
/* 				<p>*/
/* 					&nbsp;&nbsp;- Upload d'images avec gestion pour chaque utilisateur de son dossier images.*/
/* 					Adaptation du CRUD (Create, Read, Update, Delete) pour la gestion du type 'file', ainsi que*/
/* 					le contrôle en php du contenu du dossier pour éviter l'écrasement des images.*/
/* 					L'utilisateur peut éditer à chaque instant ses images qui se retrouvent dans la bibliothèque*/
/* 					du site, s'il efface une image, elle n'est plus disponible mais reste archivée pour l'affichage*/
/* 					des anciens messages du mur.*/
/* 					Pour voir le fonctionnement avec du contenu, se connecter avec login monsieur, mot de passe momo.*/
/* 				</P>*/
/* 				<p>*/
/* 					&nbsp;&nbsp;- Gestion drag and drop dynamique des images de la bibliothèque.*/
/* 				</P>*/
/* 				<p>*/
/* 					&nbsp;&nbsp;- Adaptation en ajax du bundle 'KnpPaginator'.*/
/* 				</P>*/
/* 			</div>*/
/* 			<div id="conteneurInsertConnexion" style="text-align:center; display:none;">*/
/* 				<br/><br/>*/
/* 				<div id="infosConnexion"></div>*/
/* 				<div id="cibleConnexion" style="background:#EEEEFF; display:inline-block;"></div>*/
/* 			</div>*/
/* 			<div id="conteneurInsertInscription" style="text-align:center; display:none;">*/
/* 				<div id="infosInscription"></div>*/
/* 				<div id="cibleInscription" style="background:#EEEEFF; display:inline-block;"></div>*/
/* 			</div>*/
/* 			<div id="conteneurInsertConfirmation" style="text-align:center; inline-block;">*/
/* 				{% if app.session.get('retour').message is defined %}*/
/* 					<br/><br/>*/
/* 					<div id="cibleConfirmation" style="background:#EEEEFF; display:inline-block;">*/
/* 						<div class="container" style="display:inline-block; width:400px;">*/
/* 							<div style="text-align:left; padding:20px;"><i class="icon-remove" style="cursor:pointer;" onclick="fermerConfirmation()"></i></div>*/
/* 							<br/>*/
/* 							<h2 style="background:#FFFFFF; display:inline-block;">Confirmation <i class="icon-thumbs-up"></i></h2>*/
/* 							<br/>*/
/* 							<div class="liens paddingRight bords" style="background:#FFFFFF; display:inline-block; margin:20px 20px 40px 20px; padding-bottom:20px;">*/
/* 								<br/>*/
/* 								<div style="display:inline-block;">{{ app.session.get('retour').message }}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<script src="{{ asset('js/jquery-2.1.4/jquery-2.1.4.min.js') }}"></script>*/
/* 		<script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* 		{% block body %}{% endblock %}*/
/* 		{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 			<script>*/
/* 				$(document).ready(function() {*/
/* 					$('#mon_compte').on('click', function() {*/
/* 						location.href="{{ path('fos_user_profile_show') }}";*/
/* 					});*/
/* 					$('#deconnexion').on('click', function() {*/
/* 						location.href="{{ path('fos_user_security_logout') }}";*/
/* 					});*/
/* 				});*/
/* 			</script>*/
/* 		{% else %}*/
/* 			<script>*/
/* 				$(document).ready(function() {*/
/* 					$('#connexion').on('click', function() {*/
/* 						document.getElementById('conteneurInsertInscription').style.display = 'none';*/
/* 						document.getElementById('conteneurInsertConfirmation').style.display = 'none';*/
/* 						document.getElementById('conteneurInsertProduction').style.display = 'none';*/
/* 						document.getElementById('conteneurInsertConnexion').style.display = 'block';*/
/* 						$.ajax({*/
/* 							type: "POST",*/
/* 							url: "{{ path('membre_connexion') }}",*/
/* 							success: function(returnData){*/
/* 								$('#cibleConnexion').html(returnData['html']);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 					$('#inscription').on('click', function() {*/
/* 						document.getElementById('conteneurInsertConnexion').style.display = 'none';*/
/* 						document.getElementById('conteneurInsertConfirmation').style.display = 'none';*/
/* 						document.getElementById('conteneurInsertProduction').style.display = 'none';*/
/* 						document.getElementById('conteneurInsertInscription').style.display = 'block';*/
/* 						$.ajax({*/
/* 							type: "POST",*/
/* 							url: "{{ path('membre_inscription') }}",*/
/* 							success: function(returnData){*/
/* 								$('#cibleInscription').html(returnData['html']);*/
/* 							}*/
/* 						});*/
/* 					});*/
/* 				});*/
/* 			</script>*/
/* 		{% endif %}*/
/* 		{% block javascripts %}{% endblock %}*/
/* 	</body>*/
/* </html>*/
