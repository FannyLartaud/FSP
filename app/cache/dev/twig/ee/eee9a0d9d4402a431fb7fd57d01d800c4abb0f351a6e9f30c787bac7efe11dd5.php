<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2eb4c1325dcc00c0de7e8c7255bf7883ef8cbfa1f8ccde0bdcb9db596aed38c1 extends Twig_Template
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
        $__internal_8a9af3c8ff54f32ad914e97f656fc7a49ce8990008b4ad06ad80433163abf967 = $this->env->getExtension("native_profiler");
        $__internal_8a9af3c8ff54f32ad914e97f656fc7a49ce8990008b4ad06ad80433163abf967->enter($__internal_8a9af3c8ff54f32ad914e97f656fc7a49ce8990008b4ad06ad80433163abf967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8a9af3c8ff54f32ad914e97f656fc7a49ce8990008b4ad06ad80433163abf967->leave($__internal_8a9af3c8ff54f32ad914e97f656fc7a49ce8990008b4ad06ad80433163abf967_prof);

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
