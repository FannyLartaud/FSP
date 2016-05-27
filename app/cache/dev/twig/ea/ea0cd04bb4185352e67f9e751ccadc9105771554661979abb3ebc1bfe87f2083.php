<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1ac97c77891d142eac84fe9d2e6272b4e8f2076eb7fbc4a83c5ce960b97454cf extends Twig_Template
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
        $__internal_3e9e52a0546290930948d458f7d87936f6775cd557abcb43a80afd952ad583a6 = $this->env->getExtension("native_profiler");
        $__internal_3e9e52a0546290930948d458f7d87936f6775cd557abcb43a80afd952ad583a6->enter($__internal_3e9e52a0546290930948d458f7d87936f6775cd557abcb43a80afd952ad583a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3e9e52a0546290930948d458f7d87936f6775cd557abcb43a80afd952ad583a6->leave($__internal_3e9e52a0546290930948d458f7d87936f6775cd557abcb43a80afd952ad583a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
