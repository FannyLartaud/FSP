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
        $__internal_a73206b6d9dc0c159964b6a6c00784d6d33e337958abea7e7e11f742d91b6212 = $this->env->getExtension("native_profiler");
        $__internal_a73206b6d9dc0c159964b6a6c00784d6d33e337958abea7e7e11f742d91b6212->enter($__internal_a73206b6d9dc0c159964b6a6c00784d6d33e337958abea7e7e11f742d91b6212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a73206b6d9dc0c159964b6a6c00784d6d33e337958abea7e7e11f742d91b6212->leave($__internal_a73206b6d9dc0c159964b6a6c00784d6d33e337958abea7e7e11f742d91b6212_prof);

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
