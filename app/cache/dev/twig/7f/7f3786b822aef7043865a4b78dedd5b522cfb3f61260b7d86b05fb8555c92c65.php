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
        $__internal_a2a52f270770cd3af61a209c565eba7a2635d9563560ffc736e3b71598bbf32c = $this->env->getExtension("native_profiler");
        $__internal_a2a52f270770cd3af61a209c565eba7a2635d9563560ffc736e3b71598bbf32c->enter($__internal_a2a52f270770cd3af61a209c565eba7a2635d9563560ffc736e3b71598bbf32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a52f270770cd3af61a209c565eba7a2635d9563560ffc736e3b71598bbf32c->leave($__internal_a2a52f270770cd3af61a209c565eba7a2635d9563560ffc736e3b71598bbf32c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_565c7959d006d7569cf824b6dbcc5f15259c49f2fec8894edb43e959ad1a36c6 = $this->env->getExtension("native_profiler");
        $__internal_565c7959d006d7569cf824b6dbcc5f15259c49f2fec8894edb43e959ad1a36c6->enter($__internal_565c7959d006d7569cf824b6dbcc5f15259c49f2fec8894edb43e959ad1a36c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_565c7959d006d7569cf824b6dbcc5f15259c49f2fec8894edb43e959ad1a36c6->leave($__internal_565c7959d006d7569cf824b6dbcc5f15259c49f2fec8894edb43e959ad1a36c6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c2496dfaeb0ed715eb85796e4b967ca77163af8c1954058fcfba781ad280745 = $this->env->getExtension("native_profiler");
        $__internal_6c2496dfaeb0ed715eb85796e4b967ca77163af8c1954058fcfba781ad280745->enter($__internal_6c2496dfaeb0ed715eb85796e4b967ca77163af8c1954058fcfba781ad280745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c2496dfaeb0ed715eb85796e4b967ca77163af8c1954058fcfba781ad280745->leave($__internal_6c2496dfaeb0ed715eb85796e4b967ca77163af8c1954058fcfba781ad280745_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98933f5a259ed564998c8e198985301888e030547d8244d1d2c9ee60cd3a5866 = $this->env->getExtension("native_profiler");
        $__internal_98933f5a259ed564998c8e198985301888e030547d8244d1d2c9ee60cd3a5866->enter($__internal_98933f5a259ed564998c8e198985301888e030547d8244d1d2c9ee60cd3a5866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_98933f5a259ed564998c8e198985301888e030547d8244d1d2c9ee60cd3a5866->leave($__internal_98933f5a259ed564998c8e198985301888e030547d8244d1d2c9ee60cd3a5866_prof);

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
