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
        $__internal_bca280560aa5d919179e54d0df9da22683f6f432c01f31f9e14e8f69781d4e4a = $this->env->getExtension("native_profiler");
        $__internal_bca280560aa5d919179e54d0df9da22683f6f432c01f31f9e14e8f69781d4e4a->enter($__internal_bca280560aa5d919179e54d0df9da22683f6f432c01f31f9e14e8f69781d4e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bca280560aa5d919179e54d0df9da22683f6f432c01f31f9e14e8f69781d4e4a->leave($__internal_bca280560aa5d919179e54d0df9da22683f6f432c01f31f9e14e8f69781d4e4a_prof);

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
