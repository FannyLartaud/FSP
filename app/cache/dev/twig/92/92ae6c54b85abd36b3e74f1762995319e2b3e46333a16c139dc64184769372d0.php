<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_68755ac07bf6663c7b564b00c559f1764f0330e5a3babd37b4d3e4cdb6050e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0154f4420009cf2220a25f46b24453ed1e862da8ad4e2e97a2ee077bfea609c0 = $this->env->getExtension("native_profiler");
        $__internal_0154f4420009cf2220a25f46b24453ed1e862da8ad4e2e97a2ee077bfea609c0->enter($__internal_0154f4420009cf2220a25f46b24453ed1e862da8ad4e2e97a2ee077bfea609c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0154f4420009cf2220a25f46b24453ed1e862da8ad4e2e97a2ee077bfea609c0->leave($__internal_0154f4420009cf2220a25f46b24453ed1e862da8ad4e2e97a2ee077bfea609c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de4db51d07d24ef54e089e88613afba4149caa356ad46e1c218e0b96897b234b = $this->env->getExtension("native_profiler");
        $__internal_de4db51d07d24ef54e089e88613afba4149caa356ad46e1c218e0b96897b234b->enter($__internal_de4db51d07d24ef54e089e88613afba4149caa356ad46e1c218e0b96897b234b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_de4db51d07d24ef54e089e88613afba4149caa356ad46e1c218e0b96897b234b->leave($__internal_de4db51d07d24ef54e089e88613afba4149caa356ad46e1c218e0b96897b234b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d55a03a43e3ffb9511132177e23890e7280877a5dd4c44b35277b0b84b073835 = $this->env->getExtension("native_profiler");
        $__internal_d55a03a43e3ffb9511132177e23890e7280877a5dd4c44b35277b0b84b073835->enter($__internal_d55a03a43e3ffb9511132177e23890e7280877a5dd4c44b35277b0b84b073835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d55a03a43e3ffb9511132177e23890e7280877a5dd4c44b35277b0b84b073835->leave($__internal_d55a03a43e3ffb9511132177e23890e7280877a5dd4c44b35277b0b84b073835_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
