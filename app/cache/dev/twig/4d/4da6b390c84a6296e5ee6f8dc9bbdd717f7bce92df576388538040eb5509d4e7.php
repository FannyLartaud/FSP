<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_43767335f769883404e9fc6f13b36b54a02c0d0daec5ede47d58619833855971 extends Twig_Template
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
        $__internal_9df555f77d5c5910f34ecb2507ee63e0762ccd1b2c5279880c08ecbe77df74eb = $this->env->getExtension("native_profiler");
        $__internal_9df555f77d5c5910f34ecb2507ee63e0762ccd1b2c5279880c08ecbe77df74eb->enter($__internal_9df555f77d5c5910f34ecb2507ee63e0762ccd1b2c5279880c08ecbe77df74eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9df555f77d5c5910f34ecb2507ee63e0762ccd1b2c5279880c08ecbe77df74eb->leave($__internal_9df555f77d5c5910f34ecb2507ee63e0762ccd1b2c5279880c08ecbe77df74eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
