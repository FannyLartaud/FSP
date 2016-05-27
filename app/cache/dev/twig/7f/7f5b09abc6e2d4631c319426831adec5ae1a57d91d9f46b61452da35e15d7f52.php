<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d0d6b86ff064852e5bb4b7cc8b3edb1d4e20e923f6046b08613b0b1881269307 extends Twig_Template
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
        $__internal_1c38d4b37754f7caec8aa38ca2c3887db0bd009ad477c89bf0a0183b58c1c8f0 = $this->env->getExtension("native_profiler");
        $__internal_1c38d4b37754f7caec8aa38ca2c3887db0bd009ad477c89bf0a0183b58c1c8f0->enter($__internal_1c38d4b37754f7caec8aa38ca2c3887db0bd009ad477c89bf0a0183b58c1c8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1c38d4b37754f7caec8aa38ca2c3887db0bd009ad477c89bf0a0183b58c1c8f0->leave($__internal_1c38d4b37754f7caec8aa38ca2c3887db0bd009ad477c89bf0a0183b58c1c8f0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e9d73f50f82185988035b9da642b233b2f01b9ba22d9d0443ba2db7413adaaf = $this->env->getExtension("native_profiler");
        $__internal_0e9d73f50f82185988035b9da642b233b2f01b9ba22d9d0443ba2db7413adaaf->enter($__internal_0e9d73f50f82185988035b9da642b233b2f01b9ba22d9d0443ba2db7413adaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0e9d73f50f82185988035b9da642b233b2f01b9ba22d9d0443ba2db7413adaaf->leave($__internal_0e9d73f50f82185988035b9da642b233b2f01b9ba22d9d0443ba2db7413adaaf_prof);

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
