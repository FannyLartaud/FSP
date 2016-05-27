<?php

/* FSPBundle:Theme:plan.html.twig */
class __TwigTemplate_696f912671f1d12cccfb0a553738ea06e6123960e69cd3ab97b739b20ed3fdb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:Theme:plan.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91c45b466647e7f6144fd5f12ebf2609b38aeba1f5646a2092df49725d14ac60 = $this->env->getExtension("native_profiler");
        $__internal_91c45b466647e7f6144fd5f12ebf2609b38aeba1f5646a2092df49725d14ac60->enter($__internal_91c45b466647e7f6144fd5f12ebf2609b38aeba1f5646a2092df49725d14ac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:plan.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c45b466647e7f6144fd5f12ebf2609b38aeba1f5646a2092df49725d14ac60->leave($__internal_91c45b466647e7f6144fd5f12ebf2609b38aeba1f5646a2092df49725d14ac60_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_5a961e27f397fea2f9d01e126b76588b3438633256eb6aae087a7394ee6527be = $this->env->getExtension("native_profiler");
        $__internal_5a961e27f397fea2f9d01e126b76588b3438633256eb6aae087a7394ee6527be->enter($__internal_5a961e27f397fea2f9d01e126b76588b3438633256eb6aae087a7394ee6527be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
     <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44794.191209621626!2d4.388780477748646!3d45.43681932601929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1453996188061\" width=\"880\" height=\"500\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
   </div>
  </div>
";
        
        $__internal_5a961e27f397fea2f9d01e126b76588b3438633256eb6aae087a7394ee6527be->leave($__internal_5a961e27f397fea2f9d01e126b76588b3438633256eb6aae087a7394ee6527be_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:plan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44794.191209621626!2d4.388780477748646!3d45.43681932601929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1453996188061" width="880" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
