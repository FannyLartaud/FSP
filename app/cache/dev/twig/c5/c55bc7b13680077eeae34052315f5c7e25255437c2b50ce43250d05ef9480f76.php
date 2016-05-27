<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3d9c62c8f492ed93a39720b8f445cb2fdbaac6f73c72043655d79ec6da988665 extends Twig_Template
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
        $__internal_6cca69403e1d8d45ffa0c5e497ea16f46cb8419196da430120540abd79a6c537 = $this->env->getExtension("native_profiler");
        $__internal_6cca69403e1d8d45ffa0c5e497ea16f46cb8419196da430120540abd79a6c537->enter($__internal_6cca69403e1d8d45ffa0c5e497ea16f46cb8419196da430120540abd79a6c537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6cca69403e1d8d45ffa0c5e497ea16f46cb8419196da430120540abd79a6c537->leave($__internal_6cca69403e1d8d45ffa0c5e497ea16f46cb8419196da430120540abd79a6c537_prof);

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
