<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f0483b0f2a390dea83d5ba89ed068b5571b4dfcf5a6b8adf96dc8c215a2a9ea8 extends Twig_Template
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
        $__internal_a585fcc19aab7c4af27d8e9322c5c5d6c2f10c06b45376a65b1e3753749568a0 = $this->env->getExtension("native_profiler");
        $__internal_a585fcc19aab7c4af27d8e9322c5c5d6c2f10c06b45376a65b1e3753749568a0->enter($__internal_a585fcc19aab7c4af27d8e9322c5c5d6c2f10c06b45376a65b1e3753749568a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a585fcc19aab7c4af27d8e9322c5c5d6c2f10c06b45376a65b1e3753749568a0->leave($__internal_a585fcc19aab7c4af27d8e9322c5c5d6c2f10c06b45376a65b1e3753749568a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
