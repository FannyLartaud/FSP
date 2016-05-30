<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8fd8e44d78acff4e126c086b8ea77b343d61ae7826c3688c1f0eb02049a3d23c extends Twig_Template
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
        $__internal_40b6b0eea199645011efe0f0b1005c126dda1db4ca6aaa03acd0f72516f87b03 = $this->env->getExtension("native_profiler");
        $__internal_40b6b0eea199645011efe0f0b1005c126dda1db4ca6aaa03acd0f72516f87b03->enter($__internal_40b6b0eea199645011efe0f0b1005c126dda1db4ca6aaa03acd0f72516f87b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_40b6b0eea199645011efe0f0b1005c126dda1db4ca6aaa03acd0f72516f87b03->leave($__internal_40b6b0eea199645011efe0f0b1005c126dda1db4ca6aaa03acd0f72516f87b03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
