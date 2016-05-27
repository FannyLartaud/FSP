<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ad60dc0497c787312fb2d3bcf7479003ff7268e15ff6afadeb75111a8092369b extends Twig_Template
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
        $__internal_27ad48dde742c710292f59cbc13de3fefe283d4c58ce185ef0cfbb8f8e435a80 = $this->env->getExtension("native_profiler");
        $__internal_27ad48dde742c710292f59cbc13de3fefe283d4c58ce185ef0cfbb8f8e435a80->enter($__internal_27ad48dde742c710292f59cbc13de3fefe283d4c58ce185ef0cfbb8f8e435a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_27ad48dde742c710292f59cbc13de3fefe283d4c58ce185ef0cfbb8f8e435a80->leave($__internal_27ad48dde742c710292f59cbc13de3fefe283d4c58ce185ef0cfbb8f8e435a80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
