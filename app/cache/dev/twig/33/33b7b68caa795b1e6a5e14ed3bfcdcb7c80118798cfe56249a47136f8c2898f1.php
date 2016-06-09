<?php

/* FSPBundle:User:ajouter.html.twig */
class __TwigTemplate_2e82e725a2d8c0a5041ab1c2c848775e4dc73b4c2e932b738de0d8e6e124706b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:ajouter.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle:User:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f28fa73d472e3c4fb31a73064d2f37244a02d519801270a188ac757bb89098c4 = $this->env->getExtension("native_profiler");
        $__internal_f28fa73d472e3c4fb31a73064d2f37244a02d519801270a188ac757bb89098c4->enter($__internal_f28fa73d472e3c4fb31a73064d2f37244a02d519801270a188ac757bb89098c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f28fa73d472e3c4fb31a73064d2f37244a02d519801270a188ac757bb89098c4->leave($__internal_f28fa73d472e3c4fb31a73064d2f37244a02d519801270a188ac757bb89098c4_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_9e5e159adf86d95f0ac40673b14724347fe4e8860d40f567892f7851cc495fee = $this->env->getExtension("native_profiler");
        $__internal_9e5e159adf86d95f0ac40673b14724347fe4e8860d40f567892f7851cc495fee->enter($__internal_9e5e159adf86d95f0ac40673b14724347fe4e8860d40f567892f7851cc495fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <h3>Ajouter une annonce</h3>
    </div>
     ";
        // line 8
        echo twig_include($this->env, $context, "FSPBundle:User:ajouterannonce.html.twig");
        echo "
   </div>
  </div>
";
        
        $__internal_9e5e159adf86d95f0ac40673b14724347fe4e8860d40f567892f7851cc495fee->leave($__internal_9e5e159adf86d95f0ac40673b14724347fe4e8860d40f567892f7851cc495fee_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*      <h3>Ajouter une annonce</h3>*/
/*     </div>*/
/*      {{ include ("FSPBundle:User:ajouterannonce.html.twig") }}*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
