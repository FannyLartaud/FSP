<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_487465d39b3b42d30f4ae129e2fa3298948867f5e98f63271ddc07f6ed0f3c41 extends Twig_Template
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
        $__internal_ece446849a36a2effe4ec3c2ffe5d1d94c232f2af6bfd7b51fe00f90bbc066fb = $this->env->getExtension("native_profiler");
        $__internal_ece446849a36a2effe4ec3c2ffe5d1d94c232f2af6bfd7b51fe00f90bbc066fb->enter($__internal_ece446849a36a2effe4ec3c2ffe5d1d94c232f2af6bfd7b51fe00f90bbc066fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ece446849a36a2effe4ec3c2ffe5d1d94c232f2af6bfd7b51fe00f90bbc066fb->leave($__internal_ece446849a36a2effe4ec3c2ffe5d1d94c232f2af6bfd7b51fe00f90bbc066fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
