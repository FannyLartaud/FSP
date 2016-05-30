<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d3eaf0793ebb5a03b661a2470c987bd839bb7376a2a2969e561d6863dc80b5b1 extends Twig_Template
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
        $__internal_4fd584f40622ca313d071675e8582b5e40f9a2e72edd00973504af9d1e80979d = $this->env->getExtension("native_profiler");
        $__internal_4fd584f40622ca313d071675e8582b5e40f9a2e72edd00973504af9d1e80979d->enter($__internal_4fd584f40622ca313d071675e8582b5e40f9a2e72edd00973504af9d1e80979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4fd584f40622ca313d071675e8582b5e40f9a2e72edd00973504af9d1e80979d->leave($__internal_4fd584f40622ca313d071675e8582b5e40f9a2e72edd00973504af9d1e80979d_prof);

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
