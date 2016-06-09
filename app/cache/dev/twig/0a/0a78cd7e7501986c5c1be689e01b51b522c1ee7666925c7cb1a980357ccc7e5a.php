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
        $__internal_3dc3b3f537d3119671a38481c34e056d436845ef2f6487b37aba48b886e0fd5c = $this->env->getExtension("native_profiler");
        $__internal_3dc3b3f537d3119671a38481c34e056d436845ef2f6487b37aba48b886e0fd5c->enter($__internal_3dc3b3f537d3119671a38481c34e056d436845ef2f6487b37aba48b886e0fd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3dc3b3f537d3119671a38481c34e056d436845ef2f6487b37aba48b886e0fd5c->leave($__internal_3dc3b3f537d3119671a38481c34e056d436845ef2f6487b37aba48b886e0fd5c_prof);

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
