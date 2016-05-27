<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_720a7339cd5508e1773bb615838ab98afcb593a43b03b35ad0112b09155a9d00 extends Twig_Template
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
        $__internal_8bf8b426c9f8ad9cb33e039a7d80baa035413a069cee1a2ca791b76ba9e00d08 = $this->env->getExtension("native_profiler");
        $__internal_8bf8b426c9f8ad9cb33e039a7d80baa035413a069cee1a2ca791b76ba9e00d08->enter($__internal_8bf8b426c9f8ad9cb33e039a7d80baa035413a069cee1a2ca791b76ba9e00d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8bf8b426c9f8ad9cb33e039a7d80baa035413a069cee1a2ca791b76ba9e00d08->leave($__internal_8bf8b426c9f8ad9cb33e039a7d80baa035413a069cee1a2ca791b76ba9e00d08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
