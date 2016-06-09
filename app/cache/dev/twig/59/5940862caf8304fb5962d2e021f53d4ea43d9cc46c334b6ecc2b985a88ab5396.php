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
        $__internal_10ce0ddf5d4f9e6c23babf74c945ab94dcf7c312d972edc6950e7b13e840c71d = $this->env->getExtension("native_profiler");
        $__internal_10ce0ddf5d4f9e6c23babf74c945ab94dcf7c312d972edc6950e7b13e840c71d->enter($__internal_10ce0ddf5d4f9e6c23babf74c945ab94dcf7c312d972edc6950e7b13e840c71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ce0ddf5d4f9e6c23babf74c945ab94dcf7c312d972edc6950e7b13e840c71d->leave($__internal_10ce0ddf5d4f9e6c23babf74c945ab94dcf7c312d972edc6950e7b13e840c71d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d6c1f6aa055c886a3112d28fc704184db98f1019da595fe25bcb0ce3b003ac6 = $this->env->getExtension("native_profiler");
        $__internal_7d6c1f6aa055c886a3112d28fc704184db98f1019da595fe25bcb0ce3b003ac6->enter($__internal_7d6c1f6aa055c886a3112d28fc704184db98f1019da595fe25bcb0ce3b003ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d6c1f6aa055c886a3112d28fc704184db98f1019da595fe25bcb0ce3b003ac6->leave($__internal_7d6c1f6aa055c886a3112d28fc704184db98f1019da595fe25bcb0ce3b003ac6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_936d915aad64815aa09865bdfda881a4be213732469b3ce253ee91fea0877f35 = $this->env->getExtension("native_profiler");
        $__internal_936d915aad64815aa09865bdfda881a4be213732469b3ce253ee91fea0877f35->enter($__internal_936d915aad64815aa09865bdfda881a4be213732469b3ce253ee91fea0877f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_936d915aad64815aa09865bdfda881a4be213732469b3ce253ee91fea0877f35->leave($__internal_936d915aad64815aa09865bdfda881a4be213732469b3ce253ee91fea0877f35_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eace4c64cefcb16646901b99db42f1464d45b02f3b8bfb98606ea957a9be4d40 = $this->env->getExtension("native_profiler");
        $__internal_eace4c64cefcb16646901b99db42f1464d45b02f3b8bfb98606ea957a9be4d40->enter($__internal_eace4c64cefcb16646901b99db42f1464d45b02f3b8bfb98606ea957a9be4d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eace4c64cefcb16646901b99db42f1464d45b02f3b8bfb98606ea957a9be4d40->leave($__internal_eace4c64cefcb16646901b99db42f1464d45b02f3b8bfb98606ea957a9be4d40_prof);

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
