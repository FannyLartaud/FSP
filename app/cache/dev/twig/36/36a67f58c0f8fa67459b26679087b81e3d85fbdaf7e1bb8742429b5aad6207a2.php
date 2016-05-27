<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_49794d4a4df843dfbda082bb8321d739eaaec6593d71b2138067a23fbf6b1875 extends Twig_Template
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
        $__internal_45d0edb9af3040a2e8029fa710e230c63f6429c08032e0e3a8ae0f99f92cef13 = $this->env->getExtension("native_profiler");
        $__internal_45d0edb9af3040a2e8029fa710e230c63f6429c08032e0e3a8ae0f99f92cef13->enter($__internal_45d0edb9af3040a2e8029fa710e230c63f6429c08032e0e3a8ae0f99f92cef13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45d0edb9af3040a2e8029fa710e230c63f6429c08032e0e3a8ae0f99f92cef13->leave($__internal_45d0edb9af3040a2e8029fa710e230c63f6429c08032e0e3a8ae0f99f92cef13_prof);

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
