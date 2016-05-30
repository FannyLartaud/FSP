<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_851425a84c857770bf850b6bd16bf2b66e29014fa91892ec511b556f4103af8f extends Twig_Template
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
        $__internal_35a204905cc6f9e38af24f4cb535fb1665d25679995618d1b29cc6daf75450a8 = $this->env->getExtension("native_profiler");
        $__internal_35a204905cc6f9e38af24f4cb535fb1665d25679995618d1b29cc6daf75450a8->enter($__internal_35a204905cc6f9e38af24f4cb535fb1665d25679995618d1b29cc6daf75450a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_35a204905cc6f9e38af24f4cb535fb1665d25679995618d1b29cc6daf75450a8->leave($__internal_35a204905cc6f9e38af24f4cb535fb1665d25679995618d1b29cc6daf75450a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
