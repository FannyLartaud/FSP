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
        $__internal_f348da40c76f335d42f7c4be66f9c86eb59d864bf714731c4c676623a2a80afe = $this->env->getExtension("native_profiler");
        $__internal_f348da40c76f335d42f7c4be66f9c86eb59d864bf714731c4c676623a2a80afe->enter($__internal_f348da40c76f335d42f7c4be66f9c86eb59d864bf714731c4c676623a2a80afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f348da40c76f335d42f7c4be66f9c86eb59d864bf714731c4c676623a2a80afe->leave($__internal_f348da40c76f335d42f7c4be66f9c86eb59d864bf714731c4c676623a2a80afe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60178e929d36687fc3ee8c9702b8063c555b9e6001ba385634cae5797eebf773 = $this->env->getExtension("native_profiler");
        $__internal_60178e929d36687fc3ee8c9702b8063c555b9e6001ba385634cae5797eebf773->enter($__internal_60178e929d36687fc3ee8c9702b8063c555b9e6001ba385634cae5797eebf773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_60178e929d36687fc3ee8c9702b8063c555b9e6001ba385634cae5797eebf773->leave($__internal_60178e929d36687fc3ee8c9702b8063c555b9e6001ba385634cae5797eebf773_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c9cd427fdf4ce0e3990dd4adf77adc12ebd2a117d0e959867e3257d8de4f362 = $this->env->getExtension("native_profiler");
        $__internal_1c9cd427fdf4ce0e3990dd4adf77adc12ebd2a117d0e959867e3257d8de4f362->enter($__internal_1c9cd427fdf4ce0e3990dd4adf77adc12ebd2a117d0e959867e3257d8de4f362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c9cd427fdf4ce0e3990dd4adf77adc12ebd2a117d0e959867e3257d8de4f362->leave($__internal_1c9cd427fdf4ce0e3990dd4adf77adc12ebd2a117d0e959867e3257d8de4f362_prof);

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
