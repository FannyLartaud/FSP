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
        $__internal_4faa161ab4a2634751168d471a246ffa588f2ba34c47a364bca48996971b0e43 = $this->env->getExtension("native_profiler");
        $__internal_4faa161ab4a2634751168d471a246ffa588f2ba34c47a364bca48996971b0e43->enter($__internal_4faa161ab4a2634751168d471a246ffa588f2ba34c47a364bca48996971b0e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4faa161ab4a2634751168d471a246ffa588f2ba34c47a364bca48996971b0e43->leave($__internal_4faa161ab4a2634751168d471a246ffa588f2ba34c47a364bca48996971b0e43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8949d480c03a9c5661314c75bc695735f30a400951ab527d6fd91e7b0aee65fa = $this->env->getExtension("native_profiler");
        $__internal_8949d480c03a9c5661314c75bc695735f30a400951ab527d6fd91e7b0aee65fa->enter($__internal_8949d480c03a9c5661314c75bc695735f30a400951ab527d6fd91e7b0aee65fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8949d480c03a9c5661314c75bc695735f30a400951ab527d6fd91e7b0aee65fa->leave($__internal_8949d480c03a9c5661314c75bc695735f30a400951ab527d6fd91e7b0aee65fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1998615b4fc981f762b5172dd2d239e1335991836216f32cdf8a48b74c55b44f = $this->env->getExtension("native_profiler");
        $__internal_1998615b4fc981f762b5172dd2d239e1335991836216f32cdf8a48b74c55b44f->enter($__internal_1998615b4fc981f762b5172dd2d239e1335991836216f32cdf8a48b74c55b44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1998615b4fc981f762b5172dd2d239e1335991836216f32cdf8a48b74c55b44f->leave($__internal_1998615b4fc981f762b5172dd2d239e1335991836216f32cdf8a48b74c55b44f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bea28be4a8c6d1e36e2568fea3ce5050cbd46ab4dcd6c2037c20ff084fd4ddb1 = $this->env->getExtension("native_profiler");
        $__internal_bea28be4a8c6d1e36e2568fea3ce5050cbd46ab4dcd6c2037c20ff084fd4ddb1->enter($__internal_bea28be4a8c6d1e36e2568fea3ce5050cbd46ab4dcd6c2037c20ff084fd4ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bea28be4a8c6d1e36e2568fea3ce5050cbd46ab4dcd6c2037c20ff084fd4ddb1->leave($__internal_bea28be4a8c6d1e36e2568fea3ce5050cbd46ab4dcd6c2037c20ff084fd4ddb1_prof);

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
