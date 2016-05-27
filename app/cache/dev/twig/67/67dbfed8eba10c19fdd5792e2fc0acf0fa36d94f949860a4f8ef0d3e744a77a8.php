<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a5cf519e151f61fe74f0d0772bb0baf9c98b997195e1aff7bf04b4636e3656ce extends Twig_Template
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
        $__internal_f2a9f4804e35693f401e44bfbfd15ad0d7b49aa22bd81d64531a2bc51bb28a66 = $this->env->getExtension("native_profiler");
        $__internal_f2a9f4804e35693f401e44bfbfd15ad0d7b49aa22bd81d64531a2bc51bb28a66->enter($__internal_f2a9f4804e35693f401e44bfbfd15ad0d7b49aa22bd81d64531a2bc51bb28a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f2a9f4804e35693f401e44bfbfd15ad0d7b49aa22bd81d64531a2bc51bb28a66->leave($__internal_f2a9f4804e35693f401e44bfbfd15ad0d7b49aa22bd81d64531a2bc51bb28a66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
