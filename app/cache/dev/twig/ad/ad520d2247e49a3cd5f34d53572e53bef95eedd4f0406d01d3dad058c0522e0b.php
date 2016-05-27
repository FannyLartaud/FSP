<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3af22bc7058378a23e8703a300347008a299bde49d73d03006846c5ae103d9db extends Twig_Template
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
        $__internal_d361ae862f70271abe06c03efff7da21d307e7672985d05a8da4cb7a641a612b = $this->env->getExtension("native_profiler");
        $__internal_d361ae862f70271abe06c03efff7da21d307e7672985d05a8da4cb7a641a612b->enter($__internal_d361ae862f70271abe06c03efff7da21d307e7672985d05a8da4cb7a641a612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d361ae862f70271abe06c03efff7da21d307e7672985d05a8da4cb7a641a612b->leave($__internal_d361ae862f70271abe06c03efff7da21d307e7672985d05a8da4cb7a641a612b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
