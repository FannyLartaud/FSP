<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_87e21e02f4aa0128bcddafaaa727ebe727c0636f808b70cdbdc30e5fee09029b extends Twig_Template
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
        $__internal_5933c7db14809ea5da7a92443f784d951e4af41efcb9341ad57b715184438eeb = $this->env->getExtension("native_profiler");
        $__internal_5933c7db14809ea5da7a92443f784d951e4af41efcb9341ad57b715184438eeb->enter($__internal_5933c7db14809ea5da7a92443f784d951e4af41efcb9341ad57b715184438eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5933c7db14809ea5da7a92443f784d951e4af41efcb9341ad57b715184438eeb->leave($__internal_5933c7db14809ea5da7a92443f784d951e4af41efcb9341ad57b715184438eeb_prof);

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
