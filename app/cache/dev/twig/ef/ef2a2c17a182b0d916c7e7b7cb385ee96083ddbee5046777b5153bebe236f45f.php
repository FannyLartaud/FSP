<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_29ddd510a2bcf245089def13a4000a5bf6e8057a18ed95e0b1710102f2f32c5c extends Twig_Template
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
        $__internal_4a22e3f1c0467d009468a2e454c5c19cffb6e75a5a6f77fd37fa802d747e3128 = $this->env->getExtension("native_profiler");
        $__internal_4a22e3f1c0467d009468a2e454c5c19cffb6e75a5a6f77fd37fa802d747e3128->enter($__internal_4a22e3f1c0467d009468a2e454c5c19cffb6e75a5a6f77fd37fa802d747e3128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4a22e3f1c0467d009468a2e454c5c19cffb6e75a5a6f77fd37fa802d747e3128->leave($__internal_4a22e3f1c0467d009468a2e454c5c19cffb6e75a5a6f77fd37fa802d747e3128_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
