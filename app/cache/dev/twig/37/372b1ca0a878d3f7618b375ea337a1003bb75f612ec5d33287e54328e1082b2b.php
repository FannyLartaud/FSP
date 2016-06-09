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
        $__internal_a03678ef7badd698da7da9fa1746febb7e37a95709236d9381e327db5cfcd810 = $this->env->getExtension("native_profiler");
        $__internal_a03678ef7badd698da7da9fa1746febb7e37a95709236d9381e327db5cfcd810->enter($__internal_a03678ef7badd698da7da9fa1746febb7e37a95709236d9381e327db5cfcd810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a03678ef7badd698da7da9fa1746febb7e37a95709236d9381e327db5cfcd810->leave($__internal_a03678ef7badd698da7da9fa1746febb7e37a95709236d9381e327db5cfcd810_prof);

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
