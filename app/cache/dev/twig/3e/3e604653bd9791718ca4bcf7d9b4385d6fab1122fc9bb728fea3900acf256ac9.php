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
        $__internal_60a21b17a507074c3118c27ac3721cd7645a7fe805e990c7ed2ceac16f763d13 = $this->env->getExtension("native_profiler");
        $__internal_60a21b17a507074c3118c27ac3721cd7645a7fe805e990c7ed2ceac16f763d13->enter($__internal_60a21b17a507074c3118c27ac3721cd7645a7fe805e990c7ed2ceac16f763d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_60a21b17a507074c3118c27ac3721cd7645a7fe805e990c7ed2ceac16f763d13->leave($__internal_60a21b17a507074c3118c27ac3721cd7645a7fe805e990c7ed2ceac16f763d13_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1047fbcfd8d7342015c4b01561ec800120c867443ab2727b4ede82e4f51e55b1 = $this->env->getExtension("native_profiler");
        $__internal_1047fbcfd8d7342015c4b01561ec800120c867443ab2727b4ede82e4f51e55b1->enter($__internal_1047fbcfd8d7342015c4b01561ec800120c867443ab2727b4ede82e4f51e55b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1047fbcfd8d7342015c4b01561ec800120c867443ab2727b4ede82e4f51e55b1->leave($__internal_1047fbcfd8d7342015c4b01561ec800120c867443ab2727b4ede82e4f51e55b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a87cedee05a3194e8f6957356f4be6624d29dd0b48a4abff1c9705a0aab65644 = $this->env->getExtension("native_profiler");
        $__internal_a87cedee05a3194e8f6957356f4be6624d29dd0b48a4abff1c9705a0aab65644->enter($__internal_a87cedee05a3194e8f6957356f4be6624d29dd0b48a4abff1c9705a0aab65644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a87cedee05a3194e8f6957356f4be6624d29dd0b48a4abff1c9705a0aab65644->leave($__internal_a87cedee05a3194e8f6957356f4be6624d29dd0b48a4abff1c9705a0aab65644_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8475cbd38f4bc252b4edd4083d506b9d4607011bd2335df7057ba917cd3b6aec = $this->env->getExtension("native_profiler");
        $__internal_8475cbd38f4bc252b4edd4083d506b9d4607011bd2335df7057ba917cd3b6aec->enter($__internal_8475cbd38f4bc252b4edd4083d506b9d4607011bd2335df7057ba917cd3b6aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8475cbd38f4bc252b4edd4083d506b9d4607011bd2335df7057ba917cd3b6aec->leave($__internal_8475cbd38f4bc252b4edd4083d506b9d4607011bd2335df7057ba917cd3b6aec_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f99e503e3293312f3bde6dec2d8cc1d946e8e781781ff326cb281548ff406237 = $this->env->getExtension("native_profiler");
        $__internal_f99e503e3293312f3bde6dec2d8cc1d946e8e781781ff326cb281548ff406237->enter($__internal_f99e503e3293312f3bde6dec2d8cc1d946e8e781781ff326cb281548ff406237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f99e503e3293312f3bde6dec2d8cc1d946e8e781781ff326cb281548ff406237->leave($__internal_f99e503e3293312f3bde6dec2d8cc1d946e8e781781ff326cb281548ff406237_prof);

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
