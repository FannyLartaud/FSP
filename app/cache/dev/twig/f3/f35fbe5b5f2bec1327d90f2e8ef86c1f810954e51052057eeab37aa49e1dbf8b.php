<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_01f7342e0fc7c5d18e5866c1d25f630ea7efd90780f65b29b575ebda5439a5f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec186f88d22c728981ca4170972af1d30a1d079f87aaa66294a38b9f5bbdb1a4 = $this->env->getExtension("native_profiler");
        $__internal_ec186f88d22c728981ca4170972af1d30a1d079f87aaa66294a38b9f5bbdb1a4->enter($__internal_ec186f88d22c728981ca4170972af1d30a1d079f87aaa66294a38b9f5bbdb1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => $context["key"]), "method")), "html", null, true);
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_ec186f88d22c728981ca4170972af1d30a1d079f87aaa66294a38b9f5bbdb1a4->leave($__internal_ec186f88d22c728981ca4170972af1d30a1d079f87aaa66294a38b9f5bbdb1a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  60 => 15,  52 => 12,  48 => 11,  45 => 10,  40 => 9,  33 => 5,  29 => 4,  22 => 1,);
    }
}
/* <table class="{{ class|default('') }}">*/
/*     <thead>*/
/*         <tr>*/
/*             <th scope="col" class="key">{{ labels is defined ? labels[0] : 'Key' }}</th>*/
/*             <th scope="col">{{ labels is defined ? labels[1] : 'Value' }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for key in bag.keys|sort %}*/
/*             <tr>*/
/*                 <th>{{ key }}</th>*/
/*                 <td>{{ profiler_dump(bag.get(key)) }}</td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="2">(no data)</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
