<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fa5432b552f42493205158cfcfe3fa0b7f9d91fb15c9a6d771bc91d5bcec5a48 extends Twig_Template
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
        $__internal_bedeac53c0631ba621b1e25652d969a90fa1683e77be769eb8d33223b1bf8c6e = $this->env->getExtension("native_profiler");
        $__internal_bedeac53c0631ba621b1e25652d969a90fa1683e77be769eb8d33223b1bf8c6e->enter($__internal_bedeac53c0631ba621b1e25652d969a90fa1683e77be769eb8d33223b1bf8c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bedeac53c0631ba621b1e25652d969a90fa1683e77be769eb8d33223b1bf8c6e->leave($__internal_bedeac53c0631ba621b1e25652d969a90fa1683e77be769eb8d33223b1bf8c6e_prof);

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
