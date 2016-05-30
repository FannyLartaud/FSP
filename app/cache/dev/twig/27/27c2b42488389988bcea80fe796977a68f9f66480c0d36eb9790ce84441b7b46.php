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
        $__internal_6bfc4ec9fa7f4654eda55def5f825a2479ff3a76f8fd874966167e21f4e136c3 = $this->env->getExtension("native_profiler");
        $__internal_6bfc4ec9fa7f4654eda55def5f825a2479ff3a76f8fd874966167e21f4e136c3->enter($__internal_6bfc4ec9fa7f4654eda55def5f825a2479ff3a76f8fd874966167e21f4e136c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6bfc4ec9fa7f4654eda55def5f825a2479ff3a76f8fd874966167e21f4e136c3->leave($__internal_6bfc4ec9fa7f4654eda55def5f825a2479ff3a76f8fd874966167e21f4e136c3_prof);

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
