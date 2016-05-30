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
        $__internal_827e9f583228c596cf90404b002144d42d03483ba09a19db900a6567d9033738 = $this->env->getExtension("native_profiler");
        $__internal_827e9f583228c596cf90404b002144d42d03483ba09a19db900a6567d9033738->enter($__internal_827e9f583228c596cf90404b002144d42d03483ba09a19db900a6567d9033738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_827e9f583228c596cf90404b002144d42d03483ba09a19db900a6567d9033738->leave($__internal_827e9f583228c596cf90404b002144d42d03483ba09a19db900a6567d9033738_prof);

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
