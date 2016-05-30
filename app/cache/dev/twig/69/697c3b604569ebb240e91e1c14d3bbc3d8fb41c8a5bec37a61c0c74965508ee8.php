<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fb4589df10cd3d2d7e3b30aff09fe1df2a8370c8a8c3394199ccce99030383b2 extends Twig_Template
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
        $__internal_a5dac6575d316e50470d2d9b858efa2e7a5221be2ef0dd8e681e267d4d43bed8 = $this->env->getExtension("native_profiler");
        $__internal_a5dac6575d316e50470d2d9b858efa2e7a5221be2ef0dd8e681e267d4d43bed8->enter($__internal_a5dac6575d316e50470d2d9b858efa2e7a5221be2ef0dd8e681e267d4d43bed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a5dac6575d316e50470d2d9b858efa2e7a5221be2ef0dd8e681e267d4d43bed8->leave($__internal_a5dac6575d316e50470d2d9b858efa2e7a5221be2ef0dd8e681e267d4d43bed8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
