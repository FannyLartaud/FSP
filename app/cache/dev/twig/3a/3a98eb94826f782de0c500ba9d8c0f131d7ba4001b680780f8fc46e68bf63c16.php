<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0e674d413c37ab46f9833211127c204db3475e6fd3ab34a4770bc68f9c3db76f extends Twig_Template
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
        $__internal_1f172213e7a2ad1612437d14ab39abe599fcfb1309a2ec6db8e7e4da9ba3587a = $this->env->getExtension("native_profiler");
        $__internal_1f172213e7a2ad1612437d14ab39abe599fcfb1309a2ec6db8e7e4da9ba3587a->enter($__internal_1f172213e7a2ad1612437d14ab39abe599fcfb1309a2ec6db8e7e4da9ba3587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1f172213e7a2ad1612437d14ab39abe599fcfb1309a2ec6db8e7e4da9ba3587a->leave($__internal_1f172213e7a2ad1612437d14ab39abe599fcfb1309a2ec6db8e7e4da9ba3587a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
