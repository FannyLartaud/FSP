<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6f100cf9d15b14ed2afcd7887e7221a94632fc8a3d2e9140d55152db4d4c2bd3 extends Twig_Template
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
        $__internal_f184507fb97fe7918b51da65f5a029282ae097065a4ab2876f24d55f89d29846 = $this->env->getExtension("native_profiler");
        $__internal_f184507fb97fe7918b51da65f5a029282ae097065a4ab2876f24d55f89d29846->enter($__internal_f184507fb97fe7918b51da65f5a029282ae097065a4ab2876f24d55f89d29846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f184507fb97fe7918b51da65f5a029282ae097065a4ab2876f24d55f89d29846->leave($__internal_f184507fb97fe7918b51da65f5a029282ae097065a4ab2876f24d55f89d29846_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
