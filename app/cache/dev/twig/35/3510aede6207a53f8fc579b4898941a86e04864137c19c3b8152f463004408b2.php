<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fbd7bb3e9767ac7b44652e02d6d58c213377d58f757cdf67fbcd1b5c6c4cba78 extends Twig_Template
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
        $__internal_22d271c99ae014d62811996f495b4645399f0f40a1b284ba672fdf4a9f6188f6 = $this->env->getExtension("native_profiler");
        $__internal_22d271c99ae014d62811996f495b4645399f0f40a1b284ba672fdf4a9f6188f6->enter($__internal_22d271c99ae014d62811996f495b4645399f0f40a1b284ba672fdf4a9f6188f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d271c99ae014d62811996f495b4645399f0f40a1b284ba672fdf4a9f6188f6->leave($__internal_22d271c99ae014d62811996f495b4645399f0f40a1b284ba672fdf4a9f6188f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_153afe67f55a73e45f83b5d31800f39b3d08980674e6d83550ab2ac491d9a66d = $this->env->getExtension("native_profiler");
        $__internal_153afe67f55a73e45f83b5d31800f39b3d08980674e6d83550ab2ac491d9a66d->enter($__internal_153afe67f55a73e45f83b5d31800f39b3d08980674e6d83550ab2ac491d9a66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_153afe67f55a73e45f83b5d31800f39b3d08980674e6d83550ab2ac491d9a66d->leave($__internal_153afe67f55a73e45f83b5d31800f39b3d08980674e6d83550ab2ac491d9a66d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98167c65d55d8f2fbc5736f4f47c3d94a428136f690d5c07403ad7f845228620 = $this->env->getExtension("native_profiler");
        $__internal_98167c65d55d8f2fbc5736f4f47c3d94a428136f690d5c07403ad7f845228620->enter($__internal_98167c65d55d8f2fbc5736f4f47c3d94a428136f690d5c07403ad7f845228620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_98167c65d55d8f2fbc5736f4f47c3d94a428136f690d5c07403ad7f845228620->leave($__internal_98167c65d55d8f2fbc5736f4f47c3d94a428136f690d5c07403ad7f845228620_prof);

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
