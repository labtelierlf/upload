<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_bba68b7993c035116f68984dc0726807afe55654c1211ecbd07f3fb934413638 extends Twig_Template
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
        <div id=\"entete\" class=\"span12\">
            <h2>Inscription <i class=\"icon-signin\"></i></h2>
\t\t\t<div class=\"span3\">
\t\t\t\t<div id=\"champ\" class=\"bords\">
\t\t\t\t\t<h4>Bienvenue</h4>
\t\t\t\t\t<em>
\t\t\t\t\t\tnous vous invitons à vous inscrire<br/>
\t\t\t\t\t\tafin de profiter de toutes les fonctionnalités du site.
\t\t\t\t\t</em>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"champs\" class=\"liens span7 bords\">
\t\t\t\t<h4>Vos coordonnées</h4>
\t\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t<label for=\"civilite\">Civilité</label>
\t\t\t\t\t\t<div style=\"display:inline-block; margin-bottom:20px;\">
\t\t\t\t\t\t \tMr ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civilite", array()), "0", array(), "array"), 'widget');
        echo "&nbsp;&nbsp;
\t\t\t\t\t\t \tMme ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civilite", array()), "1", array(), "array"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label for=\"username\">Nom d'utilisateur</label>
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), 'widget');
        echo "
\t\t\t\t\t\t<label for=\"email\">E-mail</label>
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
\t\t\t\t\t\t<label for=\"telephone\">Téléphone</label>
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "valide", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span2 offset2\">
\t\t\t\t\t\t<label for=\"nom\">Nom</label>
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "
\t\t\t\t\t\t<label for=\"prenom\">Prénom</label>
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget');
        echo "
\t\t\t\t\t\t<label for=\"adresse\">Adresse</label>
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget');
        echo "
\t\t\t\t\t\t<label for=\"codePostal\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "codePostal", array()), 'label');
        echo "</label>
\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "codePostal", array()), 'widget');
        echo "
\t\t\t\t\t\t<label for=\"ville\">Ville</label>
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget');
        echo "
\t\t\t\t\t\t<label for=\"pays\">Pays</label>
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t\t<div class=\"parent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"bouton children\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 55,  116 => 52,  107 => 46,  102 => 44,  97 => 42,  93 => 41,  89 => 40,  84 => 38,  79 => 36,  72 => 32,  68 => 31,  63 => 29,  58 => 27,  54 => 26,  48 => 23,  44 => 22,  36 => 17,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div id="entete" class="span12">*/
/*             <h2>Inscription <i class="icon-signin"></i></h2>*/
/* 			<div class="span3">*/
/* 				<div id="champ" class="bords">*/
/* 					<h4>Bienvenue</h4>*/
/* 					<em>*/
/* 						nous vous invitons à vous inscrire<br/>*/
/* 						afin de profiter de toutes les fonctionnalités du site.*/
/* 					</em>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="champs" class="liens span7 bords">*/
/* 				<h4>Vos coordonnées</h4>*/
/* 				{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* 				<div class="row">*/
/* 					<div class="span2">*/
/* 						<label for="civilite">Civilité</label>*/
/* 						<div style="display:inline-block; margin-bottom:20px;">*/
/* 						 	Mr {{ form_widget(form.civilite['0']) }}&nbsp;&nbsp;*/
/* 						 	Mme {{ form_widget(form.civilite['1']) }}*/
/* 						</div>*/
/* 						<label for="username">Nom d'utilisateur</label>*/
/* 						{{ form_widget(form.username) }}*/
/* 						{{ form_widget(form.plainPassword) }}*/
/* 						<label for="email">E-mail</label>*/
/* 						{{ form_widget(form.email) }}*/
/* 						<label for="telephone">Téléphone</label>*/
/* 						{{ form_widget(form.telephone) }}*/
/* 						{{ form_widget(form.valide) }}*/
/* 					</div>*/
/* 					<div class="span2 offset2">*/
/* 						<label for="nom">Nom</label>*/
/* 						{{ form_widget(form.nom) }}*/
/* 						<label for="prenom">Prénom</label>*/
/* 						{{ form_widget(form.prenom) }}*/
/* 						<label for="adresse">Adresse</label>*/
/* 						{{ form_widget(form.adresse) }}*/
/* 						<label for="codePostal">{{ form_label(form.codePostal) }}</label>*/
/* 						{{ form_widget(form.codePostal) }}*/
/* 						<label for="ville">Ville</label>*/
/* 						{{ form_widget(form.ville) }}*/
/* 						<label for="pays">Pays</label>*/
/* 						{{ form_widget(form.pays) }}*/
/* 					</div>*/
/* 				</div>*/
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
