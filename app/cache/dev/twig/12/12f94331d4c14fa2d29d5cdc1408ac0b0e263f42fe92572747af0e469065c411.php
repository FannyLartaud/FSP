<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_42a1cc3e2f60d0be107b3c57b137a8be6fd20c8e39ba78df9ca59851c18f675d extends Twig_Template
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
        $__internal_ed72e614fb4afbd9920611a3cddbd4908d59412d44f1b45b89323d1002ab0bba = $this->env->getExtension("native_profiler");
        $__internal_ed72e614fb4afbd9920611a3cddbd4908d59412d44f1b45b89323d1002ab0bba->enter($__internal_ed72e614fb4afbd9920611a3cddbd4908d59412d44f1b45b89323d1002ab0bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed72e614fb4afbd9920611a3cddbd4908d59412d44f1b45b89323d1002ab0bba->leave($__internal_ed72e614fb4afbd9920611a3cddbd4908d59412d44f1b45b89323d1002ab0bba_prof);

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
