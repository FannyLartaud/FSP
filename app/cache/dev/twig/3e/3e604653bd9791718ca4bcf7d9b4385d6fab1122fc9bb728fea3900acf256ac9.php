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
        $__internal_1f213cae68d67bc79da1bd05bb30546061cea9cbbd20bbfc91bdaed1746a7cf9 = $this->env->getExtension("native_profiler");
        $__internal_1f213cae68d67bc79da1bd05bb30546061cea9cbbd20bbfc91bdaed1746a7cf9->enter($__internal_1f213cae68d67bc79da1bd05bb30546061cea9cbbd20bbfc91bdaed1746a7cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1f213cae68d67bc79da1bd05bb30546061cea9cbbd20bbfc91bdaed1746a7cf9->leave($__internal_1f213cae68d67bc79da1bd05bb30546061cea9cbbd20bbfc91bdaed1746a7cf9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9328096f40865526280cb99f997aa381ce9ea2ca2d3de4e9cc4cdbda52f3409 = $this->env->getExtension("native_profiler");
        $__internal_b9328096f40865526280cb99f997aa381ce9ea2ca2d3de4e9cc4cdbda52f3409->enter($__internal_b9328096f40865526280cb99f997aa381ce9ea2ca2d3de4e9cc4cdbda52f3409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b9328096f40865526280cb99f997aa381ce9ea2ca2d3de4e9cc4cdbda52f3409->leave($__internal_b9328096f40865526280cb99f997aa381ce9ea2ca2d3de4e9cc4cdbda52f3409_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd26c61c1b140c55cb75c3b1fbbebc64c8224152b6b3aacd2b48d4d86e3c3c38 = $this->env->getExtension("native_profiler");
        $__internal_cd26c61c1b140c55cb75c3b1fbbebc64c8224152b6b3aacd2b48d4d86e3c3c38->enter($__internal_cd26c61c1b140c55cb75c3b1fbbebc64c8224152b6b3aacd2b48d4d86e3c3c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd26c61c1b140c55cb75c3b1fbbebc64c8224152b6b3aacd2b48d4d86e3c3c38->leave($__internal_cd26c61c1b140c55cb75c3b1fbbebc64c8224152b6b3aacd2b48d4d86e3c3c38_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36fa908ddfd9a8ce88ad8185374b9f2fa48bf9300876277b53d3d016c6967524 = $this->env->getExtension("native_profiler");
        $__internal_36fa908ddfd9a8ce88ad8185374b9f2fa48bf9300876277b53d3d016c6967524->enter($__internal_36fa908ddfd9a8ce88ad8185374b9f2fa48bf9300876277b53d3d016c6967524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36fa908ddfd9a8ce88ad8185374b9f2fa48bf9300876277b53d3d016c6967524->leave($__internal_36fa908ddfd9a8ce88ad8185374b9f2fa48bf9300876277b53d3d016c6967524_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e652a121eac573126c18b5cbe4dcd44e8365423ca03b3c2ca54ddad53bac5ea = $this->env->getExtension("native_profiler");
        $__internal_4e652a121eac573126c18b5cbe4dcd44e8365423ca03b3c2ca54ddad53bac5ea->enter($__internal_4e652a121eac573126c18b5cbe4dcd44e8365423ca03b3c2ca54ddad53bac5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4e652a121eac573126c18b5cbe4dcd44e8365423ca03b3c2ca54ddad53bac5ea->leave($__internal_4e652a121eac573126c18b5cbe4dcd44e8365423ca03b3c2ca54ddad53bac5ea_prof);

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
