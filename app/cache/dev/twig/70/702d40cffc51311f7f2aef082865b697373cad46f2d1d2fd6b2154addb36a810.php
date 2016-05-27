<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e6a509e333eb2ad14b097a044d3d497d5446929119c9ff5b6153cb4c2b9e66c0 extends Twig_Template
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
        $__internal_78cdc9828c844d2dfaa34615eea8b566431867dd2268a028456514b8db460bd0 = $this->env->getExtension("native_profiler");
        $__internal_78cdc9828c844d2dfaa34615eea8b566431867dd2268a028456514b8db460bd0->enter($__internal_78cdc9828c844d2dfaa34615eea8b566431867dd2268a028456514b8db460bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_78cdc9828c844d2dfaa34615eea8b566431867dd2268a028456514b8db460bd0->leave($__internal_78cdc9828c844d2dfaa34615eea8b566431867dd2268a028456514b8db460bd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
