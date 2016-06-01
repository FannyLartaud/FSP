<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_65bc0736c0942a567bbc8ef0e9b03d997b8549b1d1f7ac010c038aa0499ca688 extends Twig_Template
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
        $__internal_35b0815693506fcf699d687db39acd4a57c798ee20d9a08ed0b0f780d8d704fd = $this->env->getExtension("native_profiler");
        $__internal_35b0815693506fcf699d687db39acd4a57c798ee20d9a08ed0b0f780d8d704fd->enter($__internal_35b0815693506fcf699d687db39acd4a57c798ee20d9a08ed0b0f780d8d704fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_35b0815693506fcf699d687db39acd4a57c798ee20d9a08ed0b0f780d8d704fd->leave($__internal_35b0815693506fcf699d687db39acd4a57c798ee20d9a08ed0b0f780d8d704fd_prof);

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
