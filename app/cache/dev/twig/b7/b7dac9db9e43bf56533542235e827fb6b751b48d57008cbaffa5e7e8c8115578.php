<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_df1ce7706366ffa338ba0f7924e09c0b7cb225766b9a595783b06e7f55ba63ca extends Twig_Template
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
        $__internal_dc38b4915e1e93e651e2275b7dcf313a89d9683adc730aed84276730dc3e0fae = $this->env->getExtension("native_profiler");
        $__internal_dc38b4915e1e93e651e2275b7dcf313a89d9683adc730aed84276730dc3e0fae->enter($__internal_dc38b4915e1e93e651e2275b7dcf313a89d9683adc730aed84276730dc3e0fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dc38b4915e1e93e651e2275b7dcf313a89d9683adc730aed84276730dc3e0fae->leave($__internal_dc38b4915e1e93e651e2275b7dcf313a89d9683adc730aed84276730dc3e0fae_prof);

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
