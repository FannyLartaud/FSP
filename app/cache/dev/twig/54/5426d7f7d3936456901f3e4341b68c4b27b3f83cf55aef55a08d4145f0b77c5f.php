<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_42f6aabd25bc09560be70c96893ade599554cae3f26032b987ea2e7944b0c7f6 extends Twig_Template
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
        $__internal_7c260c530aca5d94c89e93716cb6efa035f5d90d3a19c2491b116272a292a324 = $this->env->getExtension("native_profiler");
        $__internal_7c260c530aca5d94c89e93716cb6efa035f5d90d3a19c2491b116272a292a324->enter($__internal_7c260c530aca5d94c89e93716cb6efa035f5d90d3a19c2491b116272a292a324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7c260c530aca5d94c89e93716cb6efa035f5d90d3a19c2491b116272a292a324->leave($__internal_7c260c530aca5d94c89e93716cb6efa035f5d90d3a19c2491b116272a292a324_prof);

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
