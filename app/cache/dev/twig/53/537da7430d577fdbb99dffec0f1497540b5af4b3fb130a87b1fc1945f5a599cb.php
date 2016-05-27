<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5f42e3bdbf2ce073ba04c3087f2b8a13429540d38d331270deac6ba6f281394f extends Twig_Template
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
        $__internal_a0d2b8453d9f0c085bad6d1589e3ee08ba68b02de8399c3d355530cfab02e105 = $this->env->getExtension("native_profiler");
        $__internal_a0d2b8453d9f0c085bad6d1589e3ee08ba68b02de8399c3d355530cfab02e105->enter($__internal_a0d2b8453d9f0c085bad6d1589e3ee08ba68b02de8399c3d355530cfab02e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a0d2b8453d9f0c085bad6d1589e3ee08ba68b02de8399c3d355530cfab02e105->leave($__internal_a0d2b8453d9f0c085bad6d1589e3ee08ba68b02de8399c3d355530cfab02e105_prof);

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
