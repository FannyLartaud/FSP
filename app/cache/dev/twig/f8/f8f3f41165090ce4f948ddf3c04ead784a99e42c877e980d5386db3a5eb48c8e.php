<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b2a95caec3d385ad2ec0caca156e410a769ca541befb96ca4d5b15c61b1f31ea extends Twig_Template
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
        $__internal_2d2e989e1c55242d59472d529933c4203edd7155085d2d18f1be7ce4afd0570c = $this->env->getExtension("native_profiler");
        $__internal_2d2e989e1c55242d59472d529933c4203edd7155085d2d18f1be7ce4afd0570c->enter($__internal_2d2e989e1c55242d59472d529933c4203edd7155085d2d18f1be7ce4afd0570c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2d2e989e1c55242d59472d529933c4203edd7155085d2d18f1be7ce4afd0570c->leave($__internal_2d2e989e1c55242d59472d529933c4203edd7155085d2d18f1be7ce4afd0570c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
