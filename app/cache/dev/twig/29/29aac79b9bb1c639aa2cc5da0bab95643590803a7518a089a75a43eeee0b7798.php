<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e62399f02fa4ee876004d9a918570083396abf8be4e6386eb9f20147c999bd9c extends Twig_Template
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
        $__internal_a297f7d3c23f513a09f3e6971eae25c0f03baf5d1078a38a48467a4d2219052e = $this->env->getExtension("native_profiler");
        $__internal_a297f7d3c23f513a09f3e6971eae25c0f03baf5d1078a38a48467a4d2219052e->enter($__internal_a297f7d3c23f513a09f3e6971eae25c0f03baf5d1078a38a48467a4d2219052e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a297f7d3c23f513a09f3e6971eae25c0f03baf5d1078a38a48467a4d2219052e->leave($__internal_a297f7d3c23f513a09f3e6971eae25c0f03baf5d1078a38a48467a4d2219052e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
