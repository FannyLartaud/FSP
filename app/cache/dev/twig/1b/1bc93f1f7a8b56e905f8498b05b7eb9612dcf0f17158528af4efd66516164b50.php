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
        $__internal_cb1a93b98bad9221b76a470a4fb94ceffe2e921d9d272afa4a870a17052a962e = $this->env->getExtension("native_profiler");
        $__internal_cb1a93b98bad9221b76a470a4fb94ceffe2e921d9d272afa4a870a17052a962e->enter($__internal_cb1a93b98bad9221b76a470a4fb94ceffe2e921d9d272afa4a870a17052a962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cb1a93b98bad9221b76a470a4fb94ceffe2e921d9d272afa4a870a17052a962e->leave($__internal_cb1a93b98bad9221b76a470a4fb94ceffe2e921d9d272afa4a870a17052a962e_prof);

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
