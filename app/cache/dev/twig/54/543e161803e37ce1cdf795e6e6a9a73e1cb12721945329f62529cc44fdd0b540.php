<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c55def34f3e28a89e5e9273aacb95e76aa8bb4c1324a669a88c7eab673312ce4 extends Twig_Template
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
        $__internal_efb84d152c61ee0ed25c1a14799102dc64b78061efa07ab03e12a0468a7c0efa = $this->env->getExtension("native_profiler");
        $__internal_efb84d152c61ee0ed25c1a14799102dc64b78061efa07ab03e12a0468a7c0efa->enter($__internal_efb84d152c61ee0ed25c1a14799102dc64b78061efa07ab03e12a0468a7c0efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_efb84d152c61ee0ed25c1a14799102dc64b78061efa07ab03e12a0468a7c0efa->leave($__internal_efb84d152c61ee0ed25c1a14799102dc64b78061efa07ab03e12a0468a7c0efa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
