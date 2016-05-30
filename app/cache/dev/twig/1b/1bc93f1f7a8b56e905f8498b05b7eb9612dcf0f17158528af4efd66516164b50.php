<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b91b9b75aa8a25cb76cf09fdbe944e6ae0caa8686011b5c4349e370348ac715e extends Twig_Template
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
        $__internal_992cf1846d0a2002835475dff9084d29b9043e3b10d692a98212afbd48c4bd2a = $this->env->getExtension("native_profiler");
        $__internal_992cf1846d0a2002835475dff9084d29b9043e3b10d692a98212afbd48c4bd2a->enter($__internal_992cf1846d0a2002835475dff9084d29b9043e3b10d692a98212afbd48c4bd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_992cf1846d0a2002835475dff9084d29b9043e3b10d692a98212afbd48c4bd2a->leave($__internal_992cf1846d0a2002835475dff9084d29b9043e3b10d692a98212afbd48c4bd2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
