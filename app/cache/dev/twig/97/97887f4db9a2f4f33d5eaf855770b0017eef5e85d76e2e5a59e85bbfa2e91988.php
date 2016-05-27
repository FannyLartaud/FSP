<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4653e2d7e892212f9d037940c911b60e2bec3ae608fb692d6dc7561b903b7fd5 extends Twig_Template
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
        $__internal_7f2496a5fc645c14df94e909ac0a3432d8622cbe8750aa23cdacae6820bc9fca = $this->env->getExtension("native_profiler");
        $__internal_7f2496a5fc645c14df94e909ac0a3432d8622cbe8750aa23cdacae6820bc9fca->enter($__internal_7f2496a5fc645c14df94e909ac0a3432d8622cbe8750aa23cdacae6820bc9fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7f2496a5fc645c14df94e909ac0a3432d8622cbe8750aa23cdacae6820bc9fca->leave($__internal_7f2496a5fc645c14df94e909ac0a3432d8622cbe8750aa23cdacae6820bc9fca_prof);

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
