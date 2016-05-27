<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5ac38171af7b0342c5bbfc7e14768f28c8ffb4d1e6726f5a6625eb3206e780d2 extends Twig_Template
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
        $__internal_10bbe8f05c6c708a222aecfc9326aa789edde88b74a7fe7141f527cee4c98e5d = $this->env->getExtension("native_profiler");
        $__internal_10bbe8f05c6c708a222aecfc9326aa789edde88b74a7fe7141f527cee4c98e5d->enter($__internal_10bbe8f05c6c708a222aecfc9326aa789edde88b74a7fe7141f527cee4c98e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_10bbe8f05c6c708a222aecfc9326aa789edde88b74a7fe7141f527cee4c98e5d->leave($__internal_10bbe8f05c6c708a222aecfc9326aa789edde88b74a7fe7141f527cee4c98e5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
