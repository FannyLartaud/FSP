<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_bfe40f1636a8a7a5716a9fa5e92844c32d48dd6e3bdbb52eadaaa0444d6f3054 extends Twig_Template
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
        $__internal_3f0862f3f4bcf412e9022d32d40e128f07e2a350b12fe5090adf2b3b2fc5651f = $this->env->getExtension("native_profiler");
        $__internal_3f0862f3f4bcf412e9022d32d40e128f07e2a350b12fe5090adf2b3b2fc5651f->enter($__internal_3f0862f3f4bcf412e9022d32d40e128f07e2a350b12fe5090adf2b3b2fc5651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3f0862f3f4bcf412e9022d32d40e128f07e2a350b12fe5090adf2b3b2fc5651f->leave($__internal_3f0862f3f4bcf412e9022d32d40e128f07e2a350b12fe5090adf2b3b2fc5651f_prof);

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
