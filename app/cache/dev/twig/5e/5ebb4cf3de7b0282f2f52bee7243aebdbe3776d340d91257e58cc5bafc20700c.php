<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_a3eb02e77fcbe62c3a2d869f9047f51da734fa4a122f4dd7ef366ec5675c8322 extends Twig_Template
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
        $__internal_828883657e34a2afe3483536aa6761c0279faf48e6c22f1a1f594476f4e45442 = $this->env->getExtension("native_profiler");
        $__internal_828883657e34a2afe3483536aa6761c0279faf48e6c22f1a1f594476f4e45442->enter($__internal_828883657e34a2afe3483536aa6761c0279faf48e6c22f1a1f594476f4e45442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_828883657e34a2afe3483536aa6761c0279faf48e6c22f1a1f594476f4e45442->leave($__internal_828883657e34a2afe3483536aa6761c0279faf48e6c22f1a1f594476f4e45442_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
