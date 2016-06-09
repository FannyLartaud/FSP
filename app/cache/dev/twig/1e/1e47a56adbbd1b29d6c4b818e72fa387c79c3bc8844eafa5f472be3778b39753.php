<?php

/* FSPBundle::layout.html.twig */
class __TwigTemplate_caf50a0c9ec8304976e6d9865515a4dbe871076cdd1471e120cefc9cc352f6b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blocGauche' => array($this, 'block_blocGauche'),
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a546006086b2853d03354258a32831212e83dcc3fe094b4475e87b64ff19a3 = $this->env->getExtension("native_profiler");
        $__internal_44a546006086b2853d03354258a32831212e83dcc3fe094b4475e87b64ff19a3->enter($__internal_44a546006086b2853d03354258a32831212e83dcc3fe094b4475e87b64ff19a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<head>
   <title>FSP - Foreign Student Platform</title>
   <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
   <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
</head>

<body>
  <div id=\"page\">
    <div id=\"entete\">
     <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fsp_accueil");
        echo "\"><img src=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/FSP.png"), "html", null, true);
        echo "\" id=\"logoFSP\" alt=\"FSP - Foreign Student Platform\" title=\"FSP - Foreign Student Platform\"/></a>
     <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fsp_francais");
        echo "\" title=\"Francais\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/france.png"), "html", null, true);
        echo "\" id=\"drapeauFR\" alt=\"Français\" title=\"Français\" /></a>
     <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fsp_anglais");
        echo "\" title=\"Anglais\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/GB.png"), "html", null, true);
        echo "\" id=\"drapeauGB\" alt=\"Anglais\" title=\"Anglais\" /></a>
     <a href=\"";
        // line 15
        echo "fsp_chinois";
        echo "\" title=\"Chinois\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/chine.png"), "html", null, true);
        echo "\" id=\"drapeauCH\" alt=\"Chinois\" title=\"Chinois\" /></a>
     </div>
     <div id=\"menuTheme\">
      <ul id=\"menuListAccueil\">
      <li>
      <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/maison.png"), "html", null, true);
        echo "\" id=\"logement\" title=\"Logement\"/>
      <a title=\"Logement\">Logement</a>
      </li>
      <li>
      <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/cours.png"), "html", null, true);
        echo "\" id=\"cours\" title=\"Cours\"/>
      <a title=\"Cours\">Cours</a>
      </li>
      <li>
      <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/evenement.png"), "html", null, true);
        echo "\" id=\"evenement\" title=\"Evénement\"/>
      <a title=\"Evenement\">Evénement</a>
      </li>
      <li>
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/culture.png"), "html", null, true);
        echo "\" id=\"culture\" title=\"Culture\"/>
      <a title=\"Culture\">Culture</a>
      </li>
      <li>
      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/plan.png"), "html", null, true);
        echo "\" id=\"plan\" title=\"Plan\"/>
      <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fsp_plan");
        echo "\" class=\"plan\" title=\"Plan\">Plan</a>
      </li>
      </ul>
     </div>
       ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    <div id=\"footer\">
     <div id=\"séparation\"></div>
     <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/iram.png"), "html", null, true);
        echo "\" id=\"logoIRAM\" alt=\"IRAM\" title=\"IRAM\" />
     <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/UJM.png"), "html", null, true);
        echo "\" id=\"logoUJM\" alt=\"UJM\" title=\"UJM\" />
     <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/cilec.png"), "html", null, true);
        echo "\" id=\"logoCILEC\" alt=\"CILEC\" title=\"CILEC\" />
     <div id=\"mention\">
     <p> &copy 2016 IRAM - Tous Droits Réservés - Mentions Légales
     </p>
     </div>
    </div>
  </div>
</body>
</html>

";
        
        $__internal_44a546006086b2853d03354258a32831212e83dcc3fe094b4475e87b64ff19a3->leave($__internal_44a546006086b2853d03354258a32831212e83dcc3fe094b4475e87b64ff19a3_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ff6e45076c91a1567dca96d1152025a691292e607c8c11b2a225dedff0c90f3 = $this->env->getExtension("native_profiler");
        $__internal_5ff6e45076c91a1567dca96d1152025a691292e607c8c11b2a225dedff0c90f3->enter($__internal_5ff6e45076c91a1567dca96d1152025a691292e607c8c11b2a225dedff0c90f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "          ";
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 44
        echo "          ";
        $this->displayBlock('blocCentre', $context, $blocks);
        // line 46
        echo "       ";
        
        $__internal_5ff6e45076c91a1567dca96d1152025a691292e607c8c11b2a225dedff0c90f3->leave($__internal_5ff6e45076c91a1567dca96d1152025a691292e607c8c11b2a225dedff0c90f3_prof);

    }

    // line 42
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_88af6867888fab1d8f4f260e6803408cd3dad46ab59df9bbd1b491d90725f7af = $this->env->getExtension("native_profiler");
        $__internal_88af6867888fab1d8f4f260e6803408cd3dad46ab59df9bbd1b491d90725f7af->enter($__internal_88af6867888fab1d8f4f260e6803408cd3dad46ab59df9bbd1b491d90725f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

        // line 43
        echo "          ";
        
        $__internal_88af6867888fab1d8f4f260e6803408cd3dad46ab59df9bbd1b491d90725f7af->leave($__internal_88af6867888fab1d8f4f260e6803408cd3dad46ab59df9bbd1b491d90725f7af_prof);

    }

    // line 44
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_b18fb038e9d4a4e107a323a3ed5a1ca0188e1c2ba4c532befef2306e0823b3b3 = $this->env->getExtension("native_profiler");
        $__internal_b18fb038e9d4a4e107a323a3ed5a1ca0188e1c2ba4c532befef2306e0823b3b3->enter($__internal_b18fb038e9d4a4e107a323a3ed5a1ca0188e1c2ba4c532befef2306e0823b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 45
        echo "          ";
        
        $__internal_b18fb038e9d4a4e107a323a3ed5a1ca0188e1c2ba4c532befef2306e0823b3b3->leave($__internal_b18fb038e9d4a4e107a323a3ed5a1ca0188e1c2ba4c532befef2306e0823b3b3_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 45,  172 => 44,  165 => 43,  159 => 42,  152 => 46,  149 => 44,  146 => 42,  140 => 41,  122 => 51,  118 => 50,  114 => 49,  110 => 47,  108 => 41,  101 => 37,  97 => 36,  90 => 32,  83 => 28,  76 => 24,  69 => 20,  59 => 15,  53 => 14,  47 => 13,  41 => 12,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <head>*/
/*    <title>FSP - Foreign Student Platform</title>*/
/*    <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*    <link href="{{ asset('bundles/fsp/styles/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/* </head>*/
/* */
/* <body>*/
/*   <div id="page">*/
/*     <div id="entete">*/
/*      <a href="{{path('fsp_accueil')}}"><img src=" {{ asset('bundles/fsp/images/FSP.png') }}" id="logoFSP" alt="FSP - Foreign Student Platform" title="FSP - Foreign Student Platform"/></a>*/
/*      <a href="{{path('fsp_francais')}}" title="Francais"><img src="{{ asset('bundles/fsp/images/france.png')}}" id="drapeauFR" alt="Français" title="Français" /></a>*/
/*      <a href="{{path('fsp_anglais')}}" title="Anglais"><img src="{{ asset('bundles/fsp/images/GB.png')}}" id="drapeauGB" alt="Anglais" title="Anglais" /></a>*/
/*      <a href="{{('fsp_chinois')}}" title="Chinois"><img src="{{ asset('bundles/fsp/images/chine.png')}}" id="drapeauCH" alt="Chinois" title="Chinois" /></a>*/
/*      </div>*/
/*      <div id="menuTheme">*/
/*       <ul id="menuListAccueil">*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/maison.png')}}" id="logement" title="Logement"/>*/
/*       <a title="Logement">Logement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/cours.png')}}" id="cours" title="Cours"/>*/
/*       <a title="Cours">Cours</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/evenement.png')}}" id="evenement" title="Evénement"/>*/
/*       <a title="Evenement">Evénement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/culture.png')}}" id="culture" title="Culture"/>*/
/*       <a title="Culture">Culture</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/plan.png')}}" id="plan" title="Plan"/>*/
/*       <a href="{{path('fsp_plan')}}" class="plan" title="Plan">Plan</a>*/
/*       </li>*/
/*       </ul>*/
/*      </div>*/
/*        {% block body%}*/
/*           {% block blocGauche %}*/
/*           {% endblock %}*/
/*           {% block blocCentre %}*/
/*           {% endblock %}*/
/*        {% endblock %}*/
/*     <div id="footer">*/
/*      <div id="séparation"></div>*/
/*      <img src="{{ asset('bundles/fsp/images/iram.png')}}" id="logoIRAM" alt="IRAM" title="IRAM" />*/
/*      <img src="{{ asset('bundles/fsp/images/UJM.png')}}" id="logoUJM" alt="UJM" title="UJM" />*/
/*      <img src="{{ asset('bundles/fsp/images/cilec.png')}}" id="logoCILEC" alt="CILEC" title="CILEC" />*/
/*      <div id="mention">*/
/*      <p> &copy 2016 IRAM - Tous Droits Réservés - Mentions Légales*/
/*      </p>*/
/*      </div>*/
/*     </div>*/
/*   </div>*/
/* </body>*/
/* </html>*/
/* */
/* */
