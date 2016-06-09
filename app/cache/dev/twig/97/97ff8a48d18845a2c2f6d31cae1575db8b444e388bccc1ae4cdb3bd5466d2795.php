<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_98f2838fe8cf67629186aa78dd416c62f43ce40cb469442bf5afb45106c336e1 extends Twig_Template
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
        $__internal_9bc4f3438ce39e7111feb3de7431efe595513763ea93b8bfc8f25590079095cc = $this->env->getExtension("native_profiler");
        $__internal_9bc4f3438ce39e7111feb3de7431efe595513763ea93b8bfc8f25590079095cc->enter($__internal_9bc4f3438ce39e7111feb3de7431efe595513763ea93b8bfc8f25590079095cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9bc4f3438ce39e7111feb3de7431efe595513763ea93b8bfc8f25590079095cc->leave($__internal_9bc4f3438ce39e7111feb3de7431efe595513763ea93b8bfc8f25590079095cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
