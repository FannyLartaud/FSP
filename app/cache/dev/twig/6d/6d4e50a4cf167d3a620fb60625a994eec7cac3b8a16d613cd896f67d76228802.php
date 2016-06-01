<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2294039666ab0de04a883f675c4a5ed6fe2a0ae4217923c85a6533f5bddb8861 extends Twig_Template
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
        $__internal_1ac25a3f931e35e2b1efc4ef2bbb12d41b1a9b96b843c9ccb75357dddd13b325 = $this->env->getExtension("native_profiler");
        $__internal_1ac25a3f931e35e2b1efc4ef2bbb12d41b1a9b96b843c9ccb75357dddd13b325->enter($__internal_1ac25a3f931e35e2b1efc4ef2bbb12d41b1a9b96b843c9ccb75357dddd13b325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1ac25a3f931e35e2b1efc4ef2bbb12d41b1a9b96b843c9ccb75357dddd13b325->leave($__internal_1ac25a3f931e35e2b1efc4ef2bbb12d41b1a9b96b843c9ccb75357dddd13b325_prof);

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
