<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_255d4440f2795f53e4ee2ba18967c9e19c8c2fbf8044582cfa4c4eaba0b80f1e extends Twig_Template
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
        $__internal_d129c87de2863a7ca57c2a8be811415a63f18fc99d0d89258768cd98c74266c0 = $this->env->getExtension("native_profiler");
        $__internal_d129c87de2863a7ca57c2a8be811415a63f18fc99d0d89258768cd98c74266c0->enter($__internal_d129c87de2863a7ca57c2a8be811415a63f18fc99d0d89258768cd98c74266c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d129c87de2863a7ca57c2a8be811415a63f18fc99d0d89258768cd98c74266c0->leave($__internal_d129c87de2863a7ca57c2a8be811415a63f18fc99d0d89258768cd98c74266c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
