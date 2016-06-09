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
        $__internal_c0c11330ba3129b0c618dc4868ba5a17c0231e0f21a369e78cf510f06aabb940 = $this->env->getExtension("native_profiler");
        $__internal_c0c11330ba3129b0c618dc4868ba5a17c0231e0f21a369e78cf510f06aabb940->enter($__internal_c0c11330ba3129b0c618dc4868ba5a17c0231e0f21a369e78cf510f06aabb940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c0c11330ba3129b0c618dc4868ba5a17c0231e0f21a369e78cf510f06aabb940->leave($__internal_c0c11330ba3129b0c618dc4868ba5a17c0231e0f21a369e78cf510f06aabb940_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e2706bbcdf8a1f3ac64ca749f4cb2adefd1bd5da85bfc7a6f0555f6e7cf5f2d = $this->env->getExtension("native_profiler");
        $__internal_2e2706bbcdf8a1f3ac64ca749f4cb2adefd1bd5da85bfc7a6f0555f6e7cf5f2d->enter($__internal_2e2706bbcdf8a1f3ac64ca749f4cb2adefd1bd5da85bfc7a6f0555f6e7cf5f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2e2706bbcdf8a1f3ac64ca749f4cb2adefd1bd5da85bfc7a6f0555f6e7cf5f2d->leave($__internal_2e2706bbcdf8a1f3ac64ca749f4cb2adefd1bd5da85bfc7a6f0555f6e7cf5f2d_prof);

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
