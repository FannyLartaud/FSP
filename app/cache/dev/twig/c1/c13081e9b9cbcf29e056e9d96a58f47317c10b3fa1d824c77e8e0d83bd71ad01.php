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
        $__internal_827af84c918d41368d238882fadc9fdda0b6de57f9cb6ac794e39fa5d06a8bc1 = $this->env->getExtension("native_profiler");
        $__internal_827af84c918d41368d238882fadc9fdda0b6de57f9cb6ac794e39fa5d06a8bc1->enter($__internal_827af84c918d41368d238882fadc9fdda0b6de57f9cb6ac794e39fa5d06a8bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_827af84c918d41368d238882fadc9fdda0b6de57f9cb6ac794e39fa5d06a8bc1->leave($__internal_827af84c918d41368d238882fadc9fdda0b6de57f9cb6ac794e39fa5d06a8bc1_prof);

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
