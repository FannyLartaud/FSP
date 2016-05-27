<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a6e62178e572702c60d7f282a7bc62c9a979983a4a7d412e52c62c6666397cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9426e6de64853580ea3687d4685c87816a0cc048b6f167acabfbf2f9512ee65b = $this->env->getExtension("native_profiler");
        $__internal_9426e6de64853580ea3687d4685c87816a0cc048b6f167acabfbf2f9512ee65b->enter($__internal_9426e6de64853580ea3687d4685c87816a0cc048b6f167acabfbf2f9512ee65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9426e6de64853580ea3687d4685c87816a0cc048b6f167acabfbf2f9512ee65b->leave($__internal_9426e6de64853580ea3687d4685c87816a0cc048b6f167acabfbf2f9512ee65b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac3a689d5bb1041cc0672aff30dda427d36ff634239631848ca8eea52ee634d5 = $this->env->getExtension("native_profiler");
        $__internal_ac3a689d5bb1041cc0672aff30dda427d36ff634239631848ca8eea52ee634d5->enter($__internal_ac3a689d5bb1041cc0672aff30dda427d36ff634239631848ca8eea52ee634d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac3a689d5bb1041cc0672aff30dda427d36ff634239631848ca8eea52ee634d5->leave($__internal_ac3a689d5bb1041cc0672aff30dda427d36ff634239631848ca8eea52ee634d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9a7466bbbd7db17bba8b9774f2ff59594f19483aa5058a868371537a5008ef0 = $this->env->getExtension("native_profiler");
        $__internal_f9a7466bbbd7db17bba8b9774f2ff59594f19483aa5058a868371537a5008ef0->enter($__internal_f9a7466bbbd7db17bba8b9774f2ff59594f19483aa5058a868371537a5008ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9a7466bbbd7db17bba8b9774f2ff59594f19483aa5058a868371537a5008ef0->leave($__internal_f9a7466bbbd7db17bba8b9774f2ff59594f19483aa5058a868371537a5008ef0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5e697302571a6d8e06039c4778b14135a2bcc5942cdb4df0574bd75eaeb9967 = $this->env->getExtension("native_profiler");
        $__internal_e5e697302571a6d8e06039c4778b14135a2bcc5942cdb4df0574bd75eaeb9967->enter($__internal_e5e697302571a6d8e06039c4778b14135a2bcc5942cdb4df0574bd75eaeb9967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5e697302571a6d8e06039c4778b14135a2bcc5942cdb4df0574bd75eaeb9967->leave($__internal_e5e697302571a6d8e06039c4778b14135a2bcc5942cdb4df0574bd75eaeb9967_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
