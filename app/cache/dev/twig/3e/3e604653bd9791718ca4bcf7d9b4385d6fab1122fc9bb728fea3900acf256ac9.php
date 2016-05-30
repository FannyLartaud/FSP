<?php

/* base.html.twig */
class __TwigTemplate_0b30ee533f0648722ae8c17f2ecdbc1f4c710d37eff574776b13ad1b292645b9 extends Twig_Template
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
        $__internal_d52a8a6a5fb96065b1ac8c4532ede4c0b98d64ab510b3efec668755644121786 = $this->env->getExtension("native_profiler");
        $__internal_d52a8a6a5fb96065b1ac8c4532ede4c0b98d64ab510b3efec668755644121786->enter($__internal_d52a8a6a5fb96065b1ac8c4532ede4c0b98d64ab510b3efec668755644121786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d52a8a6a5fb96065b1ac8c4532ede4c0b98d64ab510b3efec668755644121786->leave($__internal_d52a8a6a5fb96065b1ac8c4532ede4c0b98d64ab510b3efec668755644121786_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2338460f414b71de4976cffa98e5c9b7d9e05e9271763b1cb5b0a4c1865c825c = $this->env->getExtension("native_profiler");
        $__internal_2338460f414b71de4976cffa98e5c9b7d9e05e9271763b1cb5b0a4c1865c825c->enter($__internal_2338460f414b71de4976cffa98e5c9b7d9e05e9271763b1cb5b0a4c1865c825c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2338460f414b71de4976cffa98e5c9b7d9e05e9271763b1cb5b0a4c1865c825c->leave($__internal_2338460f414b71de4976cffa98e5c9b7d9e05e9271763b1cb5b0a4c1865c825c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85c1f38cc32917620d19c34dbdd2655b8ccf17a05d1c9108b5fd5358e94e2c46 = $this->env->getExtension("native_profiler");
        $__internal_85c1f38cc32917620d19c34dbdd2655b8ccf17a05d1c9108b5fd5358e94e2c46->enter($__internal_85c1f38cc32917620d19c34dbdd2655b8ccf17a05d1c9108b5fd5358e94e2c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85c1f38cc32917620d19c34dbdd2655b8ccf17a05d1c9108b5fd5358e94e2c46->leave($__internal_85c1f38cc32917620d19c34dbdd2655b8ccf17a05d1c9108b5fd5358e94e2c46_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_568092d25059c539953c7dc04f5020a5623b61682f391ed64a1c3c555c6c1b50 = $this->env->getExtension("native_profiler");
        $__internal_568092d25059c539953c7dc04f5020a5623b61682f391ed64a1c3c555c6c1b50->enter($__internal_568092d25059c539953c7dc04f5020a5623b61682f391ed64a1c3c555c6c1b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_568092d25059c539953c7dc04f5020a5623b61682f391ed64a1c3c555c6c1b50->leave($__internal_568092d25059c539953c7dc04f5020a5623b61682f391ed64a1c3c555c6c1b50_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ba6fd92742e2f871f18b38b9171cf7096c4837229b1cefb0f6ab0d64f1e99bc = $this->env->getExtension("native_profiler");
        $__internal_9ba6fd92742e2f871f18b38b9171cf7096c4837229b1cefb0f6ab0d64f1e99bc->enter($__internal_9ba6fd92742e2f871f18b38b9171cf7096c4837229b1cefb0f6ab0d64f1e99bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ba6fd92742e2f871f18b38b9171cf7096c4837229b1cefb0f6ab0d64f1e99bc->leave($__internal_9ba6fd92742e2f871f18b38b9171cf7096c4837229b1cefb0f6ab0d64f1e99bc_prof);

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
