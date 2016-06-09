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
        $__internal_965f33c14a202cd1782a281cf4ccc8332ce54d8e0e34dc8d2a3cd253264158ee = $this->env->getExtension("native_profiler");
        $__internal_965f33c14a202cd1782a281cf4ccc8332ce54d8e0e34dc8d2a3cd253264158ee->enter($__internal_965f33c14a202cd1782a281cf4ccc8332ce54d8e0e34dc8d2a3cd253264158ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_965f33c14a202cd1782a281cf4ccc8332ce54d8e0e34dc8d2a3cd253264158ee->leave($__internal_965f33c14a202cd1782a281cf4ccc8332ce54d8e0e34dc8d2a3cd253264158ee_prof);

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
