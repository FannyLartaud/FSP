<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_753e12f93eabd791a44fe1bc818e0484c972e5b4782bcd9a3db7a53a5d700466 extends Twig_Template
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
        $__internal_cef181902dbdf4f035688dcb09805078fd73a2ef3a445d39fff1f9bdbcc3f25a = $this->env->getExtension("native_profiler");
        $__internal_cef181902dbdf4f035688dcb09805078fd73a2ef3a445d39fff1f9bdbcc3f25a->enter($__internal_cef181902dbdf4f035688dcb09805078fd73a2ef3a445d39fff1f9bdbcc3f25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cef181902dbdf4f035688dcb09805078fd73a2ef3a445d39fff1f9bdbcc3f25a->leave($__internal_cef181902dbdf4f035688dcb09805078fd73a2ef3a445d39fff1f9bdbcc3f25a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
