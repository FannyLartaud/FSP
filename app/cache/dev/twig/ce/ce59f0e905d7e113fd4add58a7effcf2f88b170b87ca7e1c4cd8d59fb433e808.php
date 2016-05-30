<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_82d104c0ab3ea5cb02966d39e65cf8e04ae1c1859fbd6a9c0284ae899d332f44 extends Twig_Template
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
        $__internal_22a4e1a8650ed56f0d9a2e8fa9dbc04c78891919c067bfbee93cbae3a281d224 = $this->env->getExtension("native_profiler");
        $__internal_22a4e1a8650ed56f0d9a2e8fa9dbc04c78891919c067bfbee93cbae3a281d224->enter($__internal_22a4e1a8650ed56f0d9a2e8fa9dbc04c78891919c067bfbee93cbae3a281d224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_22a4e1a8650ed56f0d9a2e8fa9dbc04c78891919c067bfbee93cbae3a281d224->leave($__internal_22a4e1a8650ed56f0d9a2e8fa9dbc04c78891919c067bfbee93cbae3a281d224_prof);

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
