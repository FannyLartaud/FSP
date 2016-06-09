<?php

/* FSPBundle:User:layout.html.twig */
class __TwigTemplate_20b3543a12fac35027b14fd5312afe0caf9cbbfdfbdd68ca6d9704a59f88a704 extends Twig_Template
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
        $__internal_ad8523939e55ad80a1ec1c9579f4d7db1248f5acfcb924e3cb63d0cf4dfa2629 = $this->env->getExtension("native_profiler");
        $__internal_ad8523939e55ad80a1ec1c9579f4d7db1248f5acfcb924e3cb63d0cf4dfa2629->enter($__internal_ad8523939e55ad80a1ec1c9579f4d7db1248f5acfcb924e3cb63d0cf4dfa2629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:layout.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("fsp_accueil_connecte");
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
      <ul id=\"menuList\">
      <li>
      <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/maison.png"), "html", null, true);
        echo "\" id=\"logement\" title=\"Logement\"/>
      <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fsp_logement");
        echo "\" title=\"Logement\">Logement</a>
      </li>
      <li>
      <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/cours.png"), "html", null, true);
        echo "\" id=\"cours\" title=\"Cours\"/>
      <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fsp_cours");
        echo "\" title=\"Cours\">Cours</a>
      </li>
      <li>
      <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/evenement.png"), "html", null, true);
        echo "\" id=\"evenement\" title=\"Evénement\"/>
      <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fsp_evenement");
        echo "\" title=\"Evenement\">Evénement</a>
      </li>
      <li>
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/culture.png"), "html", null, true);
        echo "\" id=\"culture\" title=\"Culture\"/>
      <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fsp_culture");
        echo "\" title=\"Culture\">Culture</a>
      </li>
      <li>
      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/plan.png"), "html", null, true);
        echo "\" id=\"plan\" title=\"Plan\"/>
      <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fsp_plan");
        echo "\" title=\"Plan\">Plan</a>
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
        
        $__internal_ad8523939e55ad80a1ec1c9579f4d7db1248f5acfcb924e3cb63d0cf4dfa2629->leave($__internal_ad8523939e55ad80a1ec1c9579f4d7db1248f5acfcb924e3cb63d0cf4dfa2629_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_85f31bf4e4619da1b6fe2c389bb698ed5f11b47ccf138dc193abab0fcef92f53 = $this->env->getExtension("native_profiler");
        $__internal_85f31bf4e4619da1b6fe2c389bb698ed5f11b47ccf138dc193abab0fcef92f53->enter($__internal_85f31bf4e4619da1b6fe2c389bb698ed5f11b47ccf138dc193abab0fcef92f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "          ";
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 44
        echo "          ";
        $this->displayBlock('blocCentre', $context, $blocks);
        // line 46
        echo "       ";
        
        $__internal_85f31bf4e4619da1b6fe2c389bb698ed5f11b47ccf138dc193abab0fcef92f53->leave($__internal_85f31bf4e4619da1b6fe2c389bb698ed5f11b47ccf138dc193abab0fcef92f53_prof);

    }

    // line 42
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_54b02a119535ae56533cc4db679c910b2aaf49b0529d495993c3272549100733 = $this->env->getExtension("native_profiler");
        $__internal_54b02a119535ae56533cc4db679c910b2aaf49b0529d495993c3272549100733->enter($__internal_54b02a119535ae56533cc4db679c910b2aaf49b0529d495993c3272549100733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

        // line 43
        echo "          ";
        
        $__internal_54b02a119535ae56533cc4db679c910b2aaf49b0529d495993c3272549100733->leave($__internal_54b02a119535ae56533cc4db679c910b2aaf49b0529d495993c3272549100733_prof);

    }

    // line 44
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_cc4be3b5e6b1142bff9bbf9aba2d77b26abf057514fb82723d68c5f32458f5fc = $this->env->getExtension("native_profiler");
        $__internal_cc4be3b5e6b1142bff9bbf9aba2d77b26abf057514fb82723d68c5f32458f5fc->enter($__internal_cc4be3b5e6b1142bff9bbf9aba2d77b26abf057514fb82723d68c5f32458f5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 45
        echo "          ";
        
        $__internal_cc4be3b5e6b1142bff9bbf9aba2d77b26abf057514fb82723d68c5f32458f5fc->leave($__internal_cc4be3b5e6b1142bff9bbf9aba2d77b26abf057514fb82723d68c5f32458f5fc_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 45,  184 => 44,  177 => 43,  171 => 42,  164 => 46,  161 => 44,  158 => 42,  152 => 41,  134 => 51,  130 => 50,  126 => 49,  122 => 47,  120 => 41,  113 => 37,  109 => 36,  103 => 33,  99 => 32,  93 => 29,  89 => 28,  83 => 25,  79 => 24,  73 => 21,  69 => 20,  59 => 15,  53 => 14,  47 => 13,  41 => 12,  31 => 5,  25 => 1,);
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
/*      <a href="{{path('fsp_accueil_connecte')}}"><img src=" {{ asset('bundles/fsp/images/FSP.png') }}" id="logoFSP" alt="FSP - Foreign Student Platform" title="FSP - Foreign Student Platform"/></a>*/
/*      <a href="{{path('fsp_francais')}}" title="Francais"><img src="{{ asset('bundles/fsp/images/france.png')}}" id="drapeauFR" alt="Français" title="Français" /></a>*/
/*      <a href="{{path('fsp_anglais')}}" title="Anglais"><img src="{{ asset('bundles/fsp/images/GB.png')}}" id="drapeauGB" alt="Anglais" title="Anglais" /></a>*/
/*      <a href="{{('fsp_chinois')}}" title="Chinois"><img src="{{ asset('bundles/fsp/images/chine.png')}}" id="drapeauCH" alt="Chinois" title="Chinois" /></a>*/
/*      </div>*/
/*      <div id="menuTheme">*/
/*       <ul id="menuList">*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/maison.png')}}" id="logement" title="Logement"/>*/
/*       <a href="{{path('fsp_logement')}}" title="Logement">Logement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/cours.png')}}" id="cours" title="Cours"/>*/
/*       <a href="{{path('fsp_cours')}}" title="Cours">Cours</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/evenement.png')}}" id="evenement" title="Evénement"/>*/
/*       <a href="{{path('fsp_evenement')}}" title="Evenement">Evénement</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/culture.png')}}" id="culture" title="Culture"/>*/
/*       <a href="{{path('fsp_culture')}}" title="Culture">Culture</a>*/
/*       </li>*/
/*       <li>*/
/*       <img src="{{asset('bundles/fsp/images/plan.png')}}" id="plan" title="Plan"/>*/
/*       <a href="{{path('fsp_plan')}}" title="Plan">Plan</a>*/
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
