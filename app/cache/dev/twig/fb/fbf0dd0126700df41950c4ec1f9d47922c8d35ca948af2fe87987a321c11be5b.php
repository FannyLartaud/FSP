<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9319e012b00a5930300e59e4765b7237ad903460c6c0aef7239769926339f829 extends Twig_Template
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
        $__internal_ba1e241b53e5b3f1218e0faac424651c79c3b5a39c4cc333d592faa6b4b6a9ea = $this->env->getExtension("native_profiler");
        $__internal_ba1e241b53e5b3f1218e0faac424651c79c3b5a39c4cc333d592faa6b4b6a9ea->enter($__internal_ba1e241b53e5b3f1218e0faac424651c79c3b5a39c4cc333d592faa6b4b6a9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ba1e241b53e5b3f1218e0faac424651c79c3b5a39c4cc333d592faa6b4b6a9ea->leave($__internal_ba1e241b53e5b3f1218e0faac424651c79c3b5a39c4cc333d592faa6b4b6a9ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
