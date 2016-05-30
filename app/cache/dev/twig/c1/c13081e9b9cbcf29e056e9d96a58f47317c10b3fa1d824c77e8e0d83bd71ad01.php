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
        $__internal_ec2d418984c7dd1ab4fa9d3e12e23b3b9ee4de4a5f52f0bb5926997b28b8cb16 = $this->env->getExtension("native_profiler");
        $__internal_ec2d418984c7dd1ab4fa9d3e12e23b3b9ee4de4a5f52f0bb5926997b28b8cb16->enter($__internal_ec2d418984c7dd1ab4fa9d3e12e23b3b9ee4de4a5f52f0bb5926997b28b8cb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ec2d418984c7dd1ab4fa9d3e12e23b3b9ee4de4a5f52f0bb5926997b28b8cb16->leave($__internal_ec2d418984c7dd1ab4fa9d3e12e23b3b9ee4de4a5f52f0bb5926997b28b8cb16_prof);

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
