<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_23b32f2b2fcd796ab681bf18231bbed3fdb2a3d6ecc5098da30dc0a9a860ad30 extends Twig_Template
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
        $__internal_3506fd53199eff0b3f17b40fdce860beb6ddfea13124ac6c12322f2e516829d9 = $this->env->getExtension("native_profiler");
        $__internal_3506fd53199eff0b3f17b40fdce860beb6ddfea13124ac6c12322f2e516829d9->enter($__internal_3506fd53199eff0b3f17b40fdce860beb6ddfea13124ac6c12322f2e516829d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3506fd53199eff0b3f17b40fdce860beb6ddfea13124ac6c12322f2e516829d9->leave($__internal_3506fd53199eff0b3f17b40fdce860beb6ddfea13124ac6c12322f2e516829d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
