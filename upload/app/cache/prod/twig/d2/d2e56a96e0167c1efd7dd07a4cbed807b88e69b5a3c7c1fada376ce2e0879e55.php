<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_841742bedc35220ff62c94514624bc4c998460a2f15cf6964775ecd73eb7a7e7 extends Twig_Template
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
        // line 2
        echo "<div class=\"container\">
    <div class=\"row\">
    \t<div id=\"entete\" class=\"span12\">
        \t<!--<?php include '../layout/col-left-co.php'; ?>-->
        \t<h2>Édition du profil <i class=\"icon-user\"></i></h2>
\t\t\t<div id=\"champ\" class=\"span3\">
\t\t\t\t<div class=\"bords\">
\t\t\t\t\t<h4>Modifier mes informations</h4>
\t\t\t\t\t<em>
\t\t\t\t\t\tSi vos coordonnées ont changées<br/>
\t\t\t\t\t\tvous pouvez renseigner le formulaire<br/>
\t\t\t\t\t\tafin d'actualiser votre situation.
\t\t\t\t\t</em>
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 18
        $this->loadTemplate("UtilisateursBundle:Modules:utilisateurConnecte.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"champs\" class=\"liens span7 bords\">
\t\t\t\t<h4>Vos coordonnées</h4>
\t\t\t\t";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<label for=\"civilite\">Civilité</label>
\t\t\t\t\t\t\t<div style=\"display:inline-block; margin-bottom:20px;\">
\t\t\t\t\t\t\t\tMr ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civilite", array()), "0", array(), "array"), 'widget');
        echo "&nbsp;&nbsp;
\t\t\t\t\t\t\t\tMme ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civilite", array()), "1", array(), "array"), 'widget');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label for=\"username\">Nom d'utilisateur</label>
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"email\">E-mail</label>
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"telephone\">Téléphone</label>
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"current_password\">Mot de passe</label>
\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span2 offset2\">
\t\t\t\t\t\t\t<label for=\"nom\">Nom</label>
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"prenom\">Prénom</label>
\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"adresse\">Adresse</label>
\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"codePostal\">Code postal</label>
\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "codePostal", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"ville\">Ville</label>
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<label for=\"pays\">Pays</label>
\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t<div class=\"parent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"bouton children\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 61,  119 => 58,  110 => 52,  105 => 50,  100 => 48,  95 => 46,  90 => 44,  85 => 42,  78 => 38,  73 => 36,  68 => 34,  63 => 32,  57 => 29,  53 => 28,  45 => 23,  39 => 19,  37 => 18,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*     	<div id="entete" class="span12">*/
/*         	<!--<?php include '../layout/col-left-co.php'; ?>-->*/
/*         	<h2>Édition du profil <i class="icon-user"></i></h2>*/
/* 			<div id="champ" class="span3">*/
/* 				<div class="bords">*/
/* 					<h4>Modifier mes informations</h4>*/
/* 					<em>*/
/* 						Si vos coordonnées ont changées<br/>*/
/* 						vous pouvez renseigner le formulaire<br/>*/
/* 						afin d'actualiser votre situation.*/
/* 					</em>*/
/* 				</div>*/
/* 				<br/>*/
/* 				<div>*/
/* 					{% include 'UtilisateursBundle:Modules:utilisateurConnecte.html.twig' %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="champs" class="liens span7 bords">*/
/* 				<h4>Vos coordonnées</h4>*/
/* 				{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/* 					<div class="row">*/
/* 						<div class="span2">*/
/* 							<label for="civilite">Civilité</label>*/
/* 							<div style="display:inline-block; margin-bottom:20px;">*/
/* 								Mr {{ form_widget(form.civilite['0']) }}&nbsp;&nbsp;*/
/* 								Mme {{ form_widget(form.civilite['1']) }}*/
/* 							</div>*/
/* 							<label for="username">Nom d'utilisateur</label>*/
/* 							{{ form_widget(form.username) }}*/
/* 							<label for="email">E-mail</label>*/
/* 							{{ form_widget(form.email) }}*/
/* 							<label for="telephone">Téléphone</label>*/
/* 							{{ form_widget(form.telephone) }}*/
/* 							<label for="current_password">Mot de passe</label>*/
/* 							{{ form_widget(form.current_password) }}*/
/* 						</div>*/
/* 						<div class="span2 offset2">*/
/* 							<label for="nom">Nom</label>*/
/* 							{{ form_widget(form.nom) }}*/
/* 							<label for="prenom">Prénom</label>*/
/* 							{{ form_widget(form.prenom) }}*/
/* 							<label for="adresse">Adresse</label>*/
/* 							{{ form_widget(form.adresse) }}*/
/* 							<label for="codePostal">Code postal</label>*/
/* 							{{ form_widget(form.codePostal) }}*/
/* 							<label for="ville">Ville</label>*/
/* 							{{ form_widget(form.ville) }}*/
/* 							<label for="pays">Pays</label>*/
/* 							{{ form_widget(form.pays) }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<br/>*/
/* 					<div class="wrapper">*/
/* 						<div class="parent">*/
/* 							<input type="submit" class="bouton children" value="{{ 'registration.submit'|trans }}" />*/
/* 						</div>*/
/* 					</div>*/
/* 				{{ form_end(form) }}*/
/* 			</div>*/
/* 		</div>*/
/*     </div>*/
/* </div>*/
