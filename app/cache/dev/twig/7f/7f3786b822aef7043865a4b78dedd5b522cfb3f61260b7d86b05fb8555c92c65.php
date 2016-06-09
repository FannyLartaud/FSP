<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7f3427171617063662e596fbc3866c94fe5b1d4f722a1f77831c449b6469c784 extends Twig_Template
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
        $__internal_57df84da34e52857ea5f859a156e39abecf1c746c911ae6cfdde021708c880a5 = $this->env->getExtension("native_profiler");
        $__internal_57df84da34e52857ea5f859a156e39abecf1c746c911ae6cfdde021708c880a5->enter($__internal_57df84da34e52857ea5f859a156e39abecf1c746c911ae6cfdde021708c880a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57df84da34e52857ea5f859a156e39abecf1c746c911ae6cfdde021708c880a5->leave($__internal_57df84da34e52857ea5f859a156e39abecf1c746c911ae6cfdde021708c880a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b8dbdb6f83360bea16489407335ea53d24cebbc4302547b0a6761bc3d6eae01 = $this->env->getExtension("native_profiler");
        $__internal_4b8dbdb6f83360bea16489407335ea53d24cebbc4302547b0a6761bc3d6eae01->enter($__internal_4b8dbdb6f83360bea16489407335ea53d24cebbc4302547b0a6761bc3d6eae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b8dbdb6f83360bea16489407335ea53d24cebbc4302547b0a6761bc3d6eae01->leave($__internal_4b8dbdb6f83360bea16489407335ea53d24cebbc4302547b0a6761bc3d6eae01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_382be76d4803624f196dc460e6beb6791a2141d4549d0891847cb8471b5f6b80 = $this->env->getExtension("native_profiler");
        $__internal_382be76d4803624f196dc460e6beb6791a2141d4549d0891847cb8471b5f6b80->enter($__internal_382be76d4803624f196dc460e6beb6791a2141d4549d0891847cb8471b5f6b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_382be76d4803624f196dc460e6beb6791a2141d4549d0891847cb8471b5f6b80->leave($__internal_382be76d4803624f196dc460e6beb6791a2141d4549d0891847cb8471b5f6b80_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aae1f216a89c73fc896d1b28ecac34f6e9b6371e15ab1d52a906d8fd970e36cd = $this->env->getExtension("native_profiler");
        $__internal_aae1f216a89c73fc896d1b28ecac34f6e9b6371e15ab1d52a906d8fd970e36cd->enter($__internal_aae1f216a89c73fc896d1b28ecac34f6e9b6371e15ab1d52a906d8fd970e36cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aae1f216a89c73fc896d1b28ecac34f6e9b6371e15ab1d52a906d8fd970e36cd->leave($__internal_aae1f216a89c73fc896d1b28ecac34f6e9b6371e15ab1d52a906d8fd970e36cd_prof);

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
