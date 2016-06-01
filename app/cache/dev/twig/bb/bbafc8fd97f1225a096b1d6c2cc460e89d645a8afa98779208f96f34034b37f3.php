<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4efafdcf196aee79d140af4c68663b1f502300533ecbdc7c2a19b87c6c5145be extends Twig_Template
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
        $__internal_4be9079e75fdd4518e84905e046187f35f7205faf7186a9e2b61547b242d2166 = $this->env->getExtension("native_profiler");
        $__internal_4be9079e75fdd4518e84905e046187f35f7205faf7186a9e2b61547b242d2166->enter($__internal_4be9079e75fdd4518e84905e046187f35f7205faf7186a9e2b61547b242d2166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4be9079e75fdd4518e84905e046187f35f7205faf7186a9e2b61547b242d2166->leave($__internal_4be9079e75fdd4518e84905e046187f35f7205faf7186a9e2b61547b242d2166_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
