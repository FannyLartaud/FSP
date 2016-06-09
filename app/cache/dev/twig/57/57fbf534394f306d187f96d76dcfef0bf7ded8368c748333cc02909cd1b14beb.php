<?php

/* FSPBundle:Theme:plan.html.twig */
class __TwigTemplate_a961838c39e78da0a2fcd89e4684da8cd4236cd8a2d6090142a7cedfb1862400 extends Twig_Template
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
        $__internal_115984de021b268bac8943ba10dfb5ba194af634462d2e9f9094def77943c93c = $this->env->getExtension("native_profiler");
        $__internal_115984de021b268bac8943ba10dfb5ba194af634462d2e9f9094def77943c93c->enter($__internal_115984de021b268bac8943ba10dfb5ba194af634462d2e9f9094def77943c93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:plan.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_115984de021b268bac8943ba10dfb5ba194af634462d2e9f9094def77943c93c->leave($__internal_115984de021b268bac8943ba10dfb5ba194af634462d2e9f9094def77943c93c_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_7ce1941e0086c2480f14755aa532e2202c4234b7eb5872f526be5bc68638c6e3 = $this->env->getExtension("native_profiler");
        $__internal_7ce1941e0086c2480f14755aa532e2202c4234b7eb5872f526be5bc68638c6e3->enter($__internal_7ce1941e0086c2480f14755aa532e2202c4234b7eb5872f526be5bc68638c6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
     <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44794.191209621626!2d4.388780477748646!3d45.43681932601929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1453996188061\" width=\"880\" height=\"500\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
   </div>
  </div>
";
        
        $__internal_7ce1941e0086c2480f14755aa532e2202c4234b7eb5872f526be5bc68638c6e3->leave($__internal_7ce1941e0086c2480f14755aa532e2202c4234b7eb5872f526be5bc68638c6e3_prof);

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
