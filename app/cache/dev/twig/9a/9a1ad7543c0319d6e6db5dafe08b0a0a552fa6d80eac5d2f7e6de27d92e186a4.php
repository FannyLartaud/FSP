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
        $__internal_b39745a35ec1c43fbd33a43d1a6d697c6934c3d78eec003b47dbeee1aed50a9c = $this->env->getExtension("native_profiler");
        $__internal_b39745a35ec1c43fbd33a43d1a6d697c6934c3d78eec003b47dbeee1aed50a9c->enter($__internal_b39745a35ec1c43fbd33a43d1a6d697c6934c3d78eec003b47dbeee1aed50a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b39745a35ec1c43fbd33a43d1a6d697c6934c3d78eec003b47dbeee1aed50a9c->leave($__internal_b39745a35ec1c43fbd33a43d1a6d697c6934c3d78eec003b47dbeee1aed50a9c_prof);

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
