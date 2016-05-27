<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_104b3cc53174900fa2828b15bad866115faab8eaf3e0e60c152633b5fd0c29bb extends Twig_Template
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
        $__internal_92d5ffe753e76a0d01395c3582205d5b4a7b28192df7cc5c04e4eb99bfaa2cf1 = $this->env->getExtension("native_profiler");
        $__internal_92d5ffe753e76a0d01395c3582205d5b4a7b28192df7cc5c04e4eb99bfaa2cf1->enter($__internal_92d5ffe753e76a0d01395c3582205d5b4a7b28192df7cc5c04e4eb99bfaa2cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_92d5ffe753e76a0d01395c3582205d5b4a7b28192df7cc5c04e4eb99bfaa2cf1->leave($__internal_92d5ffe753e76a0d01395c3582205d5b4a7b28192df7cc5c04e4eb99bfaa2cf1_prof);

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
