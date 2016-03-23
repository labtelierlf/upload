<?php

/* AccueilBundle:Default:index.html.twig */
class __TwigTemplate_bda82ae3fefd7d1ab7fff2addcf700004cda25056ebfa1cd41a23038765d432b extends Twig_Template
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
        echo "\t<div id=\"entete\" style=\"margin-top:41px;\">
\t\t<input type=\"hidden\" id=\"localisation\" name=\"localisation\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\"/>
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "\t\t\t<div class=\"alert alert-warning\" style=\"text-align:center;\"><i class=\"icon-warning-sign\"></i>&nbsp;";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div id=\"entete\" class=\"span12\" style=\"margin-bottom:-33px;\">
\t\t\t\t<img src = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/accueil.png"), "html", null, true);
        echo "\" style=\"margin:0px; padding:0px;\"/>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"background:rgba(0, 0, 0, 0.5); position:relative; top:-610px; text-align:center; padding:20px; color:#FFFFFF;\">
\t\t\t<strong>Bienvenue,</strong>
\t\t\t<br/><br/>
\t\t\t<p>
\t\t\t\tOn vous invite à tester vos talents de grapheur sur le mur virtuel,
\t\t\t\t<br/>
\t\t\t\tvous pouvez taguer un message,
\t\t\t\tbomber un dessin en choisissant parmi la bibliothèque partagée,
\t\t\t\t<br/>
\t\t\t\tuploader vos propres images si vous vous
\t\t\t\tconnectez.
\t\t\t\t<br/>
\t\t\t\tToutes les images implémentées sont des photos de tags lyonnais.
\t\t\t\t<br/>
\t\t\t\tRemerciements à http://www.devandclick.fr et http://www.dafont.com
\t\t\t</p>
\t\t</div>
\t</div>
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
        return array (  57 => 12,  51 => 8,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/* 	<div id="entete" style="margin-top:41px;">*/
/* 		<input type="hidden" id="localisation" name="localisation" value="{{ app.request.uri }}"/>*/
/* 		{% for flashMessage in app.session.flashbag.get('warning') %}*/
/* 			<div class="alert alert-warning" style="text-align:center;"><i class="icon-warning-sign"></i>&nbsp;{{ flashMessage }}</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div id="entete" class="span12" style="margin-bottom:-33px;">*/
/* 				<img src = "{{ asset('images/accueil.png') }}" style="margin:0px; padding:0px;"/>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div style="background:rgba(0, 0, 0, 0.5); position:relative; top:-610px; text-align:center; padding:20px; color:#FFFFFF;">*/
/* 			<strong>Bienvenue,</strong>*/
/* 			<br/><br/>*/
/* 			<p>*/
/* 				On vous invite à tester vos talents de grapheur sur le mur virtuel,*/
/* 				<br/>*/
/* 				vous pouvez taguer un message,*/
/* 				bomber un dessin en choisissant parmi la bibliothèque partagée,*/
/* 				<br/>*/
/* 				uploader vos propres images si vous vous*/
/* 				connectez.*/
/* 				<br/>*/
/* 				Toutes les images implémentées sont des photos de tags lyonnais.*/
/* 				<br/>*/
/* 				Remerciements à http://www.devandclick.fr et http://www.dafont.com*/
/* 			</p>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
