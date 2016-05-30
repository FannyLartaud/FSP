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
        $__internal_6090b5911fd538f48866dc2b08abfa073e8a04261577cf532629b01b4418971b = $this->env->getExtension("native_profiler");
        $__internal_6090b5911fd538f48866dc2b08abfa073e8a04261577cf532629b01b4418971b->enter($__internal_6090b5911fd538f48866dc2b08abfa073e8a04261577cf532629b01b4418971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6090b5911fd538f48866dc2b08abfa073e8a04261577cf532629b01b4418971b->leave($__internal_6090b5911fd538f48866dc2b08abfa073e8a04261577cf532629b01b4418971b_prof);

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
