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
        $__internal_b45808521fae85aee5b97e1dbd58adaaea182038a34c44879f3d872cbe1141b8 = $this->env->getExtension("native_profiler");
        $__internal_b45808521fae85aee5b97e1dbd58adaaea182038a34c44879f3d872cbe1141b8->enter($__internal_b45808521fae85aee5b97e1dbd58adaaea182038a34c44879f3d872cbe1141b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b45808521fae85aee5b97e1dbd58adaaea182038a34c44879f3d872cbe1141b8->leave($__internal_b45808521fae85aee5b97e1dbd58adaaea182038a34c44879f3d872cbe1141b8_prof);

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
