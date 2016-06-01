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
        $__internal_29d98b19d756ea1ae9cccbd61a7eb1b6b7321c62e9ceecc95fe132daf952d831 = $this->env->getExtension("native_profiler");
        $__internal_29d98b19d756ea1ae9cccbd61a7eb1b6b7321c62e9ceecc95fe132daf952d831->enter($__internal_29d98b19d756ea1ae9cccbd61a7eb1b6b7321c62e9ceecc95fe132daf952d831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d98b19d756ea1ae9cccbd61a7eb1b6b7321c62e9ceecc95fe132daf952d831->leave($__internal_29d98b19d756ea1ae9cccbd61a7eb1b6b7321c62e9ceecc95fe132daf952d831_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efd24026b505907ed36afb085f6344e03e3b0d221234ccc0017a5dceacd3b063 = $this->env->getExtension("native_profiler");
        $__internal_efd24026b505907ed36afb085f6344e03e3b0d221234ccc0017a5dceacd3b063->enter($__internal_efd24026b505907ed36afb085f6344e03e3b0d221234ccc0017a5dceacd3b063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_efd24026b505907ed36afb085f6344e03e3b0d221234ccc0017a5dceacd3b063->leave($__internal_efd24026b505907ed36afb085f6344e03e3b0d221234ccc0017a5dceacd3b063_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4597d77a9d129ae29cbd2baea9e8249ce55a813a9e8370da22d132bb494d325e = $this->env->getExtension("native_profiler");
        $__internal_4597d77a9d129ae29cbd2baea9e8249ce55a813a9e8370da22d132bb494d325e->enter($__internal_4597d77a9d129ae29cbd2baea9e8249ce55a813a9e8370da22d132bb494d325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4597d77a9d129ae29cbd2baea9e8249ce55a813a9e8370da22d132bb494d325e->leave($__internal_4597d77a9d129ae29cbd2baea9e8249ce55a813a9e8370da22d132bb494d325e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84924796e5c612e6115f29d0cde45840ab288f01793979929a5027498b6ec758 = $this->env->getExtension("native_profiler");
        $__internal_84924796e5c612e6115f29d0cde45840ab288f01793979929a5027498b6ec758->enter($__internal_84924796e5c612e6115f29d0cde45840ab288f01793979929a5027498b6ec758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_84924796e5c612e6115f29d0cde45840ab288f01793979929a5027498b6ec758->leave($__internal_84924796e5c612e6115f29d0cde45840ab288f01793979929a5027498b6ec758_prof);

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
