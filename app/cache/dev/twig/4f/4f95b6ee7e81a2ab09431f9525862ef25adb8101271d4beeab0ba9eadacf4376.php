<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e7d94b39f016272ee74e0bda2a2cbf3203fff1fd7353bec1db38a05df4fced20 extends Twig_Template
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
        $__internal_76bdd26e6aeb8d65e1f45c9b7f6be258c319f607db6f6cd8abc0d0da53ecaa9e = $this->env->getExtension("native_profiler");
        $__internal_76bdd26e6aeb8d65e1f45c9b7f6be258c319f607db6f6cd8abc0d0da53ecaa9e->enter($__internal_76bdd26e6aeb8d65e1f45c9b7f6be258c319f607db6f6cd8abc0d0da53ecaa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_76bdd26e6aeb8d65e1f45c9b7f6be258c319f607db6f6cd8abc0d0da53ecaa9e->leave($__internal_76bdd26e6aeb8d65e1f45c9b7f6be258c319f607db6f6cd8abc0d0da53ecaa9e_prof);

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
