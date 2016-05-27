<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b226a3f95663d6e5a8908916b9d12ac670d04bcbc2e31362701f91a57779292e extends Twig_Template
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
        $__internal_2005b0ff1f6d266455f7fc0d3df1ec47088fc8d0e4cc68e592467b2a77280af6 = $this->env->getExtension("native_profiler");
        $__internal_2005b0ff1f6d266455f7fc0d3df1ec47088fc8d0e4cc68e592467b2a77280af6->enter($__internal_2005b0ff1f6d266455f7fc0d3df1ec47088fc8d0e4cc68e592467b2a77280af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2005b0ff1f6d266455f7fc0d3df1ec47088fc8d0e4cc68e592467b2a77280af6->leave($__internal_2005b0ff1f6d266455f7fc0d3df1ec47088fc8d0e4cc68e592467b2a77280af6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
