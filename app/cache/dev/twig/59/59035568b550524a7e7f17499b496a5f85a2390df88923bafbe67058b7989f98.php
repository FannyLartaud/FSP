<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d2e68624f3d9d3729357a6938c37ba93f5c65215dfdae0047628e8c667013189 extends Twig_Template
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
        $__internal_89c6bd434bf4f05a1f6f044bd9e6da0e1ef88b623ddd5c959d46dc3cc54c1c00 = $this->env->getExtension("native_profiler");
        $__internal_89c6bd434bf4f05a1f6f044bd9e6da0e1ef88b623ddd5c959d46dc3cc54c1c00->enter($__internal_89c6bd434bf4f05a1f6f044bd9e6da0e1ef88b623ddd5c959d46dc3cc54c1c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_89c6bd434bf4f05a1f6f044bd9e6da0e1ef88b623ddd5c959d46dc3cc54c1c00->leave($__internal_89c6bd434bf4f05a1f6f044bd9e6da0e1ef88b623ddd5c959d46dc3cc54c1c00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
