<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_60279cae75704b71de905650c3919984de81d94a0981d1f850773fb1975007de extends Twig_Template
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
        $__internal_42e41f6aa85439d198e6b7dc0b63785afa92485d968183919db6b9551442a710 = $this->env->getExtension("native_profiler");
        $__internal_42e41f6aa85439d198e6b7dc0b63785afa92485d968183919db6b9551442a710->enter($__internal_42e41f6aa85439d198e6b7dc0b63785afa92485d968183919db6b9551442a710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_42e41f6aa85439d198e6b7dc0b63785afa92485d968183919db6b9551442a710->leave($__internal_42e41f6aa85439d198e6b7dc0b63785afa92485d968183919db6b9551442a710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
