<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c370164c5aa70447f52ae52262a80e7ea39589798b44922bd87428659b23eada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ecf971a1726cd7ac67e89fc7d4694ddefda7582286e9dc6b50558670215f06d = $this->env->getExtension("native_profiler");
        $__internal_7ecf971a1726cd7ac67e89fc7d4694ddefda7582286e9dc6b50558670215f06d->enter($__internal_7ecf971a1726cd7ac67e89fc7d4694ddefda7582286e9dc6b50558670215f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7ecf971a1726cd7ac67e89fc7d4694ddefda7582286e9dc6b50558670215f06d->leave($__internal_7ecf971a1726cd7ac67e89fc7d4694ddefda7582286e9dc6b50558670215f06d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a546dc0f8082201042f18af2d7fa09b1635054e14cd1a9c9eb6c94a6df6afbad = $this->env->getExtension("native_profiler");
        $__internal_a546dc0f8082201042f18af2d7fa09b1635054e14cd1a9c9eb6c94a6df6afbad->enter($__internal_a546dc0f8082201042f18af2d7fa09b1635054e14cd1a9c9eb6c94a6df6afbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a546dc0f8082201042f18af2d7fa09b1635054e14cd1a9c9eb6c94a6df6afbad->leave($__internal_a546dc0f8082201042f18af2d7fa09b1635054e14cd1a9c9eb6c94a6df6afbad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
