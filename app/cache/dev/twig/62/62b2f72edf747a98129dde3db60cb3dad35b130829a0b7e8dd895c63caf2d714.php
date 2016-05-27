<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_356dc434f1b04f885bc56714a01f9a1c3d267a0d6f6388a41b9914ffc09c594e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_22a6f165410e702b3999802c820461013ea98647ec19465b729400c0a520e0e6 = $this->env->getExtension("native_profiler");
        $__internal_22a6f165410e702b3999802c820461013ea98647ec19465b729400c0a520e0e6->enter($__internal_22a6f165410e702b3999802c820461013ea98647ec19465b729400c0a520e0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a6f165410e702b3999802c820461013ea98647ec19465b729400c0a520e0e6->leave($__internal_22a6f165410e702b3999802c820461013ea98647ec19465b729400c0a520e0e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e39d2e2fd9202057aa0e1a00de16bc131948926bd103e6439e90eb6afa3cc267 = $this->env->getExtension("native_profiler");
        $__internal_e39d2e2fd9202057aa0e1a00de16bc131948926bd103e6439e90eb6afa3cc267->enter($__internal_e39d2e2fd9202057aa0e1a00de16bc131948926bd103e6439e90eb6afa3cc267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e39d2e2fd9202057aa0e1a00de16bc131948926bd103e6439e90eb6afa3cc267->leave($__internal_e39d2e2fd9202057aa0e1a00de16bc131948926bd103e6439e90eb6afa3cc267_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ecc37faff7d3fb8f766ae23d15d250e74167d00d9750f1f4891f621853398fa = $this->env->getExtension("native_profiler");
        $__internal_5ecc37faff7d3fb8f766ae23d15d250e74167d00d9750f1f4891f621853398fa->enter($__internal_5ecc37faff7d3fb8f766ae23d15d250e74167d00d9750f1f4891f621853398fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ecc37faff7d3fb8f766ae23d15d250e74167d00d9750f1f4891f621853398fa->leave($__internal_5ecc37faff7d3fb8f766ae23d15d250e74167d00d9750f1f4891f621853398fa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_af584829bf55ef5520c7149517d5d21fe7666aa3dbd6704f07b9fb628008db7e = $this->env->getExtension("native_profiler");
        $__internal_af584829bf55ef5520c7149517d5d21fe7666aa3dbd6704f07b9fb628008db7e->enter($__internal_af584829bf55ef5520c7149517d5d21fe7666aa3dbd6704f07b9fb628008db7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_af584829bf55ef5520c7149517d5d21fe7666aa3dbd6704f07b9fb628008db7e->leave($__internal_af584829bf55ef5520c7149517d5d21fe7666aa3dbd6704f07b9fb628008db7e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
