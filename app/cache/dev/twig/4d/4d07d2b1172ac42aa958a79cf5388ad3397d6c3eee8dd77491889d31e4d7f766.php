<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_37152ee85058fe58c3dd6d5d3f25ffe1a216b88a75fd86be6b840f3c88ceed85 extends Twig_Template
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
        $__internal_814e4fbd9ccbc7d4df2d50763707b0c8eaf86e877461c8aa361a996cbb992bb4 = $this->env->getExtension("native_profiler");
        $__internal_814e4fbd9ccbc7d4df2d50763707b0c8eaf86e877461c8aa361a996cbb992bb4->enter($__internal_814e4fbd9ccbc7d4df2d50763707b0c8eaf86e877461c8aa361a996cbb992bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_814e4fbd9ccbc7d4df2d50763707b0c8eaf86e877461c8aa361a996cbb992bb4->leave($__internal_814e4fbd9ccbc7d4df2d50763707b0c8eaf86e877461c8aa361a996cbb992bb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
