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
        $__internal_f0437716af1629b5332cb1731bbfcac10cd264567d16a623046471b293fa1efe = $this->env->getExtension("native_profiler");
        $__internal_f0437716af1629b5332cb1731bbfcac10cd264567d16a623046471b293fa1efe->enter($__internal_f0437716af1629b5332cb1731bbfcac10cd264567d16a623046471b293fa1efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f0437716af1629b5332cb1731bbfcac10cd264567d16a623046471b293fa1efe->leave($__internal_f0437716af1629b5332cb1731bbfcac10cd264567d16a623046471b293fa1efe_prof);

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
