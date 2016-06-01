<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_05a58b4738ab26ff854761cd7c802c95bb1ddf5a103932d1d0c0b771945173f2 extends Twig_Template
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
        $__internal_64f853b3dee8a858b1418d566a92be13ea02d8da555ffb31d5dc3727eede7217 = $this->env->getExtension("native_profiler");
        $__internal_64f853b3dee8a858b1418d566a92be13ea02d8da555ffb31d5dc3727eede7217->enter($__internal_64f853b3dee8a858b1418d566a92be13ea02d8da555ffb31d5dc3727eede7217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_64f853b3dee8a858b1418d566a92be13ea02d8da555ffb31d5dc3727eede7217->leave($__internal_64f853b3dee8a858b1418d566a92be13ea02d8da555ffb31d5dc3727eede7217_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
