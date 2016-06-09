<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7d18a1b9592d24009adfce924c8e2438553b95acb20804cfb9b3ac27f23189d7 extends Twig_Template
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
        $__internal_bc269daa3a79f3a3ca93c926b73e3ad36d4ef58f11e7ea33cedfdad109ff82ca = $this->env->getExtension("native_profiler");
        $__internal_bc269daa3a79f3a3ca93c926b73e3ad36d4ef58f11e7ea33cedfdad109ff82ca->enter($__internal_bc269daa3a79f3a3ca93c926b73e3ad36d4ef58f11e7ea33cedfdad109ff82ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bc269daa3a79f3a3ca93c926b73e3ad36d4ef58f11e7ea33cedfdad109ff82ca->leave($__internal_bc269daa3a79f3a3ca93c926b73e3ad36d4ef58f11e7ea33cedfdad109ff82ca_prof);

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
