<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d6f456774d3f0a92eacb37e3a6683d10b5d4a4ed2e6e9456ff6b4119ca11f76f extends Twig_Template
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
        $__internal_1d72e2b5220eeea6d344db40b1f2c779f8b38c674036efb04afc5514ca5c62c1 = $this->env->getExtension("native_profiler");
        $__internal_1d72e2b5220eeea6d344db40b1f2c779f8b38c674036efb04afc5514ca5c62c1->enter($__internal_1d72e2b5220eeea6d344db40b1f2c779f8b38c674036efb04afc5514ca5c62c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1d72e2b5220eeea6d344db40b1f2c779f8b38c674036efb04afc5514ca5c62c1->leave($__internal_1d72e2b5220eeea6d344db40b1f2c779f8b38c674036efb04afc5514ca5c62c1_prof);

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
