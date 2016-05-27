<?php

/* base.html.twig */
class __TwigTemplate_d8ab9120af9a2d33a46ed842197be7536fc5d26cbff00c9ad3eb3140568c5c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84764a8ce2d26c3fda88da7bed39f7fe850b5776fcfa40446301836310d3fd8c = $this->env->getExtension("native_profiler");
        $__internal_84764a8ce2d26c3fda88da7bed39f7fe850b5776fcfa40446301836310d3fd8c->enter($__internal_84764a8ce2d26c3fda88da7bed39f7fe850b5776fcfa40446301836310d3fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_84764a8ce2d26c3fda88da7bed39f7fe850b5776fcfa40446301836310d3fd8c->leave($__internal_84764a8ce2d26c3fda88da7bed39f7fe850b5776fcfa40446301836310d3fd8c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e704c64ce428ea40c5f619c05ffd16052797b0f5078a0c9eaa42da179c1bc32 = $this->env->getExtension("native_profiler");
        $__internal_2e704c64ce428ea40c5f619c05ffd16052797b0f5078a0c9eaa42da179c1bc32->enter($__internal_2e704c64ce428ea40c5f619c05ffd16052797b0f5078a0c9eaa42da179c1bc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2e704c64ce428ea40c5f619c05ffd16052797b0f5078a0c9eaa42da179c1bc32->leave($__internal_2e704c64ce428ea40c5f619c05ffd16052797b0f5078a0c9eaa42da179c1bc32_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f204384b5caf9c452ea64d2fdf0c702299116fb44eae911e5503d4da96009f2c = $this->env->getExtension("native_profiler");
        $__internal_f204384b5caf9c452ea64d2fdf0c702299116fb44eae911e5503d4da96009f2c->enter($__internal_f204384b5caf9c452ea64d2fdf0c702299116fb44eae911e5503d4da96009f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f204384b5caf9c452ea64d2fdf0c702299116fb44eae911e5503d4da96009f2c->leave($__internal_f204384b5caf9c452ea64d2fdf0c702299116fb44eae911e5503d4da96009f2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0189e054562f99eab41b572e5fdbd6f1f8d8634477c86af58c9ef898abfc977 = $this->env->getExtension("native_profiler");
        $__internal_c0189e054562f99eab41b572e5fdbd6f1f8d8634477c86af58c9ef898abfc977->enter($__internal_c0189e054562f99eab41b572e5fdbd6f1f8d8634477c86af58c9ef898abfc977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0189e054562f99eab41b572e5fdbd6f1f8d8634477c86af58c9ef898abfc977->leave($__internal_c0189e054562f99eab41b572e5fdbd6f1f8d8634477c86af58c9ef898abfc977_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f350804313c6bee107bde21c4048db6bf5104359292af21535eb99f11c8698df = $this->env->getExtension("native_profiler");
        $__internal_f350804313c6bee107bde21c4048db6bf5104359292af21535eb99f11c8698df->enter($__internal_f350804313c6bee107bde21c4048db6bf5104359292af21535eb99f11c8698df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f350804313c6bee107bde21c4048db6bf5104359292af21535eb99f11c8698df->leave($__internal_f350804313c6bee107bde21c4048db6bf5104359292af21535eb99f11c8698df_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
