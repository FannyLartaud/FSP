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
        $__internal_5bdf76dbb03d25e1852c49bd60eada3c803a45941de5c6bc1d0b17d03d21bb66 = $this->env->getExtension("native_profiler");
        $__internal_5bdf76dbb03d25e1852c49bd60eada3c803a45941de5c6bc1d0b17d03d21bb66->enter($__internal_5bdf76dbb03d25e1852c49bd60eada3c803a45941de5c6bc1d0b17d03d21bb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5bdf76dbb03d25e1852c49bd60eada3c803a45941de5c6bc1d0b17d03d21bb66->leave($__internal_5bdf76dbb03d25e1852c49bd60eada3c803a45941de5c6bc1d0b17d03d21bb66_prof);

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
