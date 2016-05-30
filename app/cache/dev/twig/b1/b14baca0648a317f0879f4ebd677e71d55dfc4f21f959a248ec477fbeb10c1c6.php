<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_366dca33acef51f41fc444aa41ba3460768bfc150f2b75b5b7b2f8a4a549c0d8 extends Twig_Template
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
        $__internal_be961a7e667f2213a0720bda37cb11f553994238b56e20728dbc2d9eb366cf34 = $this->env->getExtension("native_profiler");
        $__internal_be961a7e667f2213a0720bda37cb11f553994238b56e20728dbc2d9eb366cf34->enter($__internal_be961a7e667f2213a0720bda37cb11f553994238b56e20728dbc2d9eb366cf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_be961a7e667f2213a0720bda37cb11f553994238b56e20728dbc2d9eb366cf34->leave($__internal_be961a7e667f2213a0720bda37cb11f553994238b56e20728dbc2d9eb366cf34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
