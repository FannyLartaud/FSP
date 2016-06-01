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
        $__internal_c661ab54773511c11e93ada42fffe364702a257d53c306967f59ec1b9dba775c = $this->env->getExtension("native_profiler");
        $__internal_c661ab54773511c11e93ada42fffe364702a257d53c306967f59ec1b9dba775c->enter($__internal_c661ab54773511c11e93ada42fffe364702a257d53c306967f59ec1b9dba775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c661ab54773511c11e93ada42fffe364702a257d53c306967f59ec1b9dba775c->leave($__internal_c661ab54773511c11e93ada42fffe364702a257d53c306967f59ec1b9dba775c_prof);

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
