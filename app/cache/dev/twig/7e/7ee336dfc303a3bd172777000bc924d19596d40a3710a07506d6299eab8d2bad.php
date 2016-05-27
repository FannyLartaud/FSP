<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c3d7bb3c3aa0904d3583b7613ca65bc8d78cbcac9ac8c585d96004bf5004cc80 extends Twig_Template
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
        $__internal_9f5fdb3d32cf29a52d495fd0f53b500f87293468969eee81a399cfc661d91c55 = $this->env->getExtension("native_profiler");
        $__internal_9f5fdb3d32cf29a52d495fd0f53b500f87293468969eee81a399cfc661d91c55->enter($__internal_9f5fdb3d32cf29a52d495fd0f53b500f87293468969eee81a399cfc661d91c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9f5fdb3d32cf29a52d495fd0f53b500f87293468969eee81a399cfc661d91c55->leave($__internal_9f5fdb3d32cf29a52d495fd0f53b500f87293468969eee81a399cfc661d91c55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
