<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e8adfb3e54e78023d94b77ca4b618a99df9698108162af075cb97b810be9e98a extends Twig_Template
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
        $__internal_f5a93bed25beece82084685df866a469ae6bf7d897ef7e3ac518f1c45c31976f = $this->env->getExtension("native_profiler");
        $__internal_f5a93bed25beece82084685df866a469ae6bf7d897ef7e3ac518f1c45c31976f->enter($__internal_f5a93bed25beece82084685df866a469ae6bf7d897ef7e3ac518f1c45c31976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f5a93bed25beece82084685df866a469ae6bf7d897ef7e3ac518f1c45c31976f->leave($__internal_f5a93bed25beece82084685df866a469ae6bf7d897ef7e3ac518f1c45c31976f_prof);

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
