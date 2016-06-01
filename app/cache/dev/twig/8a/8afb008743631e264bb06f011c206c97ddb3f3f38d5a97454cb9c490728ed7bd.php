<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c370164c5aa70447f52ae52262a80e7ea39589798b44922bd87428659b23eada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4413d6270e7e3c86fae48355db69d4f0cbe9d2dd84a9acd73cfc9120e362587a = $this->env->getExtension("native_profiler");
        $__internal_4413d6270e7e3c86fae48355db69d4f0cbe9d2dd84a9acd73cfc9120e362587a->enter($__internal_4413d6270e7e3c86fae48355db69d4f0cbe9d2dd84a9acd73cfc9120e362587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4413d6270e7e3c86fae48355db69d4f0cbe9d2dd84a9acd73cfc9120e362587a->leave($__internal_4413d6270e7e3c86fae48355db69d4f0cbe9d2dd84a9acd73cfc9120e362587a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6381c658c4adc410400f651fe9481080c41fc76ad84c7698f35bc78d9fea3336 = $this->env->getExtension("native_profiler");
        $__internal_6381c658c4adc410400f651fe9481080c41fc76ad84c7698f35bc78d9fea3336->enter($__internal_6381c658c4adc410400f651fe9481080c41fc76ad84c7698f35bc78d9fea3336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6381c658c4adc410400f651fe9481080c41fc76ad84c7698f35bc78d9fea3336->leave($__internal_6381c658c4adc410400f651fe9481080c41fc76ad84c7698f35bc78d9fea3336_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
