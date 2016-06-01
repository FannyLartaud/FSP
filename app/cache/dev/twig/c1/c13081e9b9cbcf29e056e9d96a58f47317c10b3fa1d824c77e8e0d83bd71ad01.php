<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ad5407ba07f1b3e4248e582e1695de6f28588f8721e7080e1702950a0604802e extends Twig_Template
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
        $__internal_7abe8c9ed89ee272252bf3bc531702f8d588ae6fc8fe6dbf09ea648247803e70 = $this->env->getExtension("native_profiler");
        $__internal_7abe8c9ed89ee272252bf3bc531702f8d588ae6fc8fe6dbf09ea648247803e70->enter($__internal_7abe8c9ed89ee272252bf3bc531702f8d588ae6fc8fe6dbf09ea648247803e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7abe8c9ed89ee272252bf3bc531702f8d588ae6fc8fe6dbf09ea648247803e70->leave($__internal_7abe8c9ed89ee272252bf3bc531702f8d588ae6fc8fe6dbf09ea648247803e70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
