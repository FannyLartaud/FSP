<?php

/* FSPBundle:User:ajouter.html.twig */
class __TwigTemplate_14b4ec88307aed1ef7dd965591947d55859abe25d81d4fb1ce4df5e6761da986 extends Twig_Template
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
        $__internal_433375062a8aaa6e785ec20e3ecc4e8c89e70500a3b11449ff5d42a66f0bc245 = $this->env->getExtension("native_profiler");
        $__internal_433375062a8aaa6e785ec20e3ecc4e8c89e70500a3b11449ff5d42a66f0bc245->enter($__internal_433375062a8aaa6e785ec20e3ecc4e8c89e70500a3b11449ff5d42a66f0bc245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433375062a8aaa6e785ec20e3ecc4e8c89e70500a3b11449ff5d42a66f0bc245->leave($__internal_433375062a8aaa6e785ec20e3ecc4e8c89e70500a3b11449ff5d42a66f0bc245_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_7f1f7deb86fd8ac0768489e40fe5195130b7989cb3ae3566c4db2d38a40a6f5b = $this->env->getExtension("native_profiler");
        $__internal_7f1f7deb86fd8ac0768489e40fe5195130b7989cb3ae3566c4db2d38a40a6f5b->enter($__internal_7f1f7deb86fd8ac0768489e40fe5195130b7989cb3ae3566c4db2d38a40a6f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        
        $__internal_7f1f7deb86fd8ac0768489e40fe5195130b7989cb3ae3566c4db2d38a40a6f5b->leave($__internal_7f1f7deb86fd8ac0768489e40fe5195130b7989cb3ae3566c4db2d38a40a6f5b_prof);

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
