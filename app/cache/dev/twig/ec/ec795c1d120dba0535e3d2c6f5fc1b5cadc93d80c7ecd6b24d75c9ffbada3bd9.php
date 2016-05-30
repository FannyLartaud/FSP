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
        $__internal_cd686aa9919b1782eb913de9c75776d1c510302ed55f1600a81a70810f965f59 = $this->env->getExtension("native_profiler");
        $__internal_cd686aa9919b1782eb913de9c75776d1c510302ed55f1600a81a70810f965f59->enter($__internal_cd686aa9919b1782eb913de9c75776d1c510302ed55f1600a81a70810f965f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cd686aa9919b1782eb913de9c75776d1c510302ed55f1600a81a70810f965f59->leave($__internal_cd686aa9919b1782eb913de9c75776d1c510302ed55f1600a81a70810f965f59_prof);

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
