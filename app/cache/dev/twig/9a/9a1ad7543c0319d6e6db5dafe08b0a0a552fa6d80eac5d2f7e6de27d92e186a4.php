<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3770432a24a6865851218702bec9c5c4271ce947787a04cb30eb821ddafd0488 extends Twig_Template
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
        $__internal_2d371958527a9b170d393b0538f247e2a8be28c5aab7ea4868e2ea2da44029bd = $this->env->getExtension("native_profiler");
        $__internal_2d371958527a9b170d393b0538f247e2a8be28c5aab7ea4868e2ea2da44029bd->enter($__internal_2d371958527a9b170d393b0538f247e2a8be28c5aab7ea4868e2ea2da44029bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2d371958527a9b170d393b0538f247e2a8be28c5aab7ea4868e2ea2da44029bd->leave($__internal_2d371958527a9b170d393b0538f247e2a8be28c5aab7ea4868e2ea2da44029bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
