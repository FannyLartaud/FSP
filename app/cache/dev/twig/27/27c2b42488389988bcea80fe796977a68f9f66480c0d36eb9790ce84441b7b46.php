<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_234842767e1a21ad23a574bfae0e14e4c57ea71ff9dd8dd75ddf7bdd98d5cbb5 extends Twig_Template
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
        $__internal_bcd94108c49f272f71ef9d2120202933fd47b7c48d2ca3a17c73dbe6c4762ea8 = $this->env->getExtension("native_profiler");
        $__internal_bcd94108c49f272f71ef9d2120202933fd47b7c48d2ca3a17c73dbe6c4762ea8->enter($__internal_bcd94108c49f272f71ef9d2120202933fd47b7c48d2ca3a17c73dbe6c4762ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bcd94108c49f272f71ef9d2120202933fd47b7c48d2ca3a17c73dbe6c4762ea8->leave($__internal_bcd94108c49f272f71ef9d2120202933fd47b7c48d2ca3a17c73dbe6c4762ea8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
