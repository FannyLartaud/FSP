<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_251f0b03e3bf31751bd68c5a744f60a8dd5ae9f09addbb167b308f4c2c32fd1f extends Twig_Template
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
        $__internal_06d44620e4d21c9a0c6432c90aa35140b7870e1aa0f2b4db7598f78a12485a25 = $this->env->getExtension("native_profiler");
        $__internal_06d44620e4d21c9a0c6432c90aa35140b7870e1aa0f2b4db7598f78a12485a25->enter($__internal_06d44620e4d21c9a0c6432c90aa35140b7870e1aa0f2b4db7598f78a12485a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_06d44620e4d21c9a0c6432c90aa35140b7870e1aa0f2b4db7598f78a12485a25->leave($__internal_06d44620e4d21c9a0c6432c90aa35140b7870e1aa0f2b4db7598f78a12485a25_prof);

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
