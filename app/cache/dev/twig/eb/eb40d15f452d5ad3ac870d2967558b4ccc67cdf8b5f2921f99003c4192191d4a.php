<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5cd823a832245391f0d7da1c94900d13e6a17e6c98c28e2de611378ffced6b87 extends Twig_Template
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
        $__internal_8f8416d443b6c11a1962cfb0ba1a525473933814f54d61ab236f0f3f6615734e = $this->env->getExtension("native_profiler");
        $__internal_8f8416d443b6c11a1962cfb0ba1a525473933814f54d61ab236f0f3f6615734e->enter($__internal_8f8416d443b6c11a1962cfb0ba1a525473933814f54d61ab236f0f3f6615734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8f8416d443b6c11a1962cfb0ba1a525473933814f54d61ab236f0f3f6615734e->leave($__internal_8f8416d443b6c11a1962cfb0ba1a525473933814f54d61ab236f0f3f6615734e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
