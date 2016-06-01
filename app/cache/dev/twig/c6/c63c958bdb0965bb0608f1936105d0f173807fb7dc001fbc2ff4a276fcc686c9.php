<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b2452bbb131ef9f36205410e3e6f18d141d033262850ccc82a26b855afad9584 extends Twig_Template
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
        $__internal_f6512d709340eb181f61e96b83613b9a4b98bafa8be5d1e83c3c5fb4ea1c0379 = $this->env->getExtension("native_profiler");
        $__internal_f6512d709340eb181f61e96b83613b9a4b98bafa8be5d1e83c3c5fb4ea1c0379->enter($__internal_f6512d709340eb181f61e96b83613b9a4b98bafa8be5d1e83c3c5fb4ea1c0379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f6512d709340eb181f61e96b83613b9a4b98bafa8be5d1e83c3c5fb4ea1c0379->leave($__internal_f6512d709340eb181f61e96b83613b9a4b98bafa8be5d1e83c3c5fb4ea1c0379_prof);

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
