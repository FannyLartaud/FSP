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
        $__internal_f5db093d124f50ed879710c420fdd8e2a0ffe35424cc9a04a5767f45fde45beb = $this->env->getExtension("native_profiler");
        $__internal_f5db093d124f50ed879710c420fdd8e2a0ffe35424cc9a04a5767f45fde45beb->enter($__internal_f5db093d124f50ed879710c420fdd8e2a0ffe35424cc9a04a5767f45fde45beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5db093d124f50ed879710c420fdd8e2a0ffe35424cc9a04a5767f45fde45beb->leave($__internal_f5db093d124f50ed879710c420fdd8e2a0ffe35424cc9a04a5767f45fde45beb_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_67fed7f38b2fb736fbbb11319b75b73d74c866755f385a0532c38359ddba15f9 = $this->env->getExtension("native_profiler");
        $__internal_67fed7f38b2fb736fbbb11319b75b73d74c866755f385a0532c38359ddba15f9->enter($__internal_67fed7f38b2fb736fbbb11319b75b73d74c866755f385a0532c38359ddba15f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        
        $__internal_67fed7f38b2fb736fbbb11319b75b73d74c866755f385a0532c38359ddba15f9->leave($__internal_67fed7f38b2fb736fbbb11319b75b73d74c866755f385a0532c38359ddba15f9_prof);

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
