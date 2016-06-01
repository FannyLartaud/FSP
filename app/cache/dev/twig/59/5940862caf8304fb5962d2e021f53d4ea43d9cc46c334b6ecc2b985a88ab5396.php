<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4564624a1c966ca79a08d7ccd35e94c137407e2e20dad6c8fde20d6acfe8739f extends Twig_Template
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
        $__internal_b1c9275d25f3ea027f119f4fe05a88134eae82c0b2fcffb2ad887e7c7dd720d7 = $this->env->getExtension("native_profiler");
        $__internal_b1c9275d25f3ea027f119f4fe05a88134eae82c0b2fcffb2ad887e7c7dd720d7->enter($__internal_b1c9275d25f3ea027f119f4fe05a88134eae82c0b2fcffb2ad887e7c7dd720d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c9275d25f3ea027f119f4fe05a88134eae82c0b2fcffb2ad887e7c7dd720d7->leave($__internal_b1c9275d25f3ea027f119f4fe05a88134eae82c0b2fcffb2ad887e7c7dd720d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e64044b03090c1a4b85e15b9753db854ad91c44629cca7d8460f774f150b26b = $this->env->getExtension("native_profiler");
        $__internal_8e64044b03090c1a4b85e15b9753db854ad91c44629cca7d8460f774f150b26b->enter($__internal_8e64044b03090c1a4b85e15b9753db854ad91c44629cca7d8460f774f150b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e64044b03090c1a4b85e15b9753db854ad91c44629cca7d8460f774f150b26b->leave($__internal_8e64044b03090c1a4b85e15b9753db854ad91c44629cca7d8460f774f150b26b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc8f392c09a7513c9017b177915b72b72121be34ce2ab1676a799dc6700e793a = $this->env->getExtension("native_profiler");
        $__internal_fc8f392c09a7513c9017b177915b72b72121be34ce2ab1676a799dc6700e793a->enter($__internal_fc8f392c09a7513c9017b177915b72b72121be34ce2ab1676a799dc6700e793a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc8f392c09a7513c9017b177915b72b72121be34ce2ab1676a799dc6700e793a->leave($__internal_fc8f392c09a7513c9017b177915b72b72121be34ce2ab1676a799dc6700e793a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_336c7af44eacc378f291c4b281841eed5c34c45755cf4588164445f73485a77c = $this->env->getExtension("native_profiler");
        $__internal_336c7af44eacc378f291c4b281841eed5c34c45755cf4588164445f73485a77c->enter($__internal_336c7af44eacc378f291c4b281841eed5c34c45755cf4588164445f73485a77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_336c7af44eacc378f291c4b281841eed5c34c45755cf4588164445f73485a77c->leave($__internal_336c7af44eacc378f291c4b281841eed5c34c45755cf4588164445f73485a77c_prof);

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
