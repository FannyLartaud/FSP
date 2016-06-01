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
        $__internal_36a0278d24e09026883cf6893de65423610dcaeb028645600abebb815efff61e = $this->env->getExtension("native_profiler");
        $__internal_36a0278d24e09026883cf6893de65423610dcaeb028645600abebb815efff61e->enter($__internal_36a0278d24e09026883cf6893de65423610dcaeb028645600abebb815efff61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a0278d24e09026883cf6893de65423610dcaeb028645600abebb815efff61e->leave($__internal_36a0278d24e09026883cf6893de65423610dcaeb028645600abebb815efff61e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be205d5789f26702a9b6ebe8b59bb376063b7f050a18eee5afc2ec71f4d031e7 = $this->env->getExtension("native_profiler");
        $__internal_be205d5789f26702a9b6ebe8b59bb376063b7f050a18eee5afc2ec71f4d031e7->enter($__internal_be205d5789f26702a9b6ebe8b59bb376063b7f050a18eee5afc2ec71f4d031e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_be205d5789f26702a9b6ebe8b59bb376063b7f050a18eee5afc2ec71f4d031e7->leave($__internal_be205d5789f26702a9b6ebe8b59bb376063b7f050a18eee5afc2ec71f4d031e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dad6344e949391c82098bfeb507633fa371516235b90f5ac35702e995e9e61e = $this->env->getExtension("native_profiler");
        $__internal_4dad6344e949391c82098bfeb507633fa371516235b90f5ac35702e995e9e61e->enter($__internal_4dad6344e949391c82098bfeb507633fa371516235b90f5ac35702e995e9e61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4dad6344e949391c82098bfeb507633fa371516235b90f5ac35702e995e9e61e->leave($__internal_4dad6344e949391c82098bfeb507633fa371516235b90f5ac35702e995e9e61e_prof);

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
