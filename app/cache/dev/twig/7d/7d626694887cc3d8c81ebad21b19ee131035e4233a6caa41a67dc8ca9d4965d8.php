<?php

/* FSPBundle::accueil.html.twig */
class __TwigTemplate_e7c3c386980f1f00b5b7e3348b705e147db28d03030202c8f05129c74359b851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::layout.html.twig", "FSPBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blocGauche' => array($this, 'block_blocGauche'),
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98f522000795f70d545990c4fe4b91a5b7e4d67ff840d78f40a3bc82b5e40fc3 = $this->env->getExtension("native_profiler");
        $__internal_98f522000795f70d545990c4fe4b91a5b7e4d67ff840d78f40a3bc82b5e40fc3->enter($__internal_98f522000795f70d545990c4fe4b91a5b7e4d67ff840d78f40a3bc82b5e40fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98f522000795f70d545990c4fe4b91a5b7e4d67ff840d78f40a3bc82b5e40fc3->leave($__internal_98f522000795f70d545990c4fe4b91a5b7e4d67ff840d78f40a3bc82b5e40fc3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_77cc3d20aeabff6819eaec20a5ef407521de5137e6df217e29b7cdbd0ae9c7eb = $this->env->getExtension("native_profiler");
        $__internal_77cc3d20aeabff6819eaec20a5ef407521de5137e6df217e29b7cdbd0ae9c7eb->enter($__internal_77cc3d20aeabff6819eaec20a5ef407521de5137e6df217e29b7cdbd0ae9c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 15
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_77cc3d20aeabff6819eaec20a5ef407521de5137e6df217e29b7cdbd0ae9c7eb->leave($__internal_77cc3d20aeabff6819eaec20a5ef407521de5137e6df217e29b7cdbd0ae9c7eb_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_5a9cdcb390878d5706eaa84b89aaf3be1e8a45d430983ca3b7d186394e90fe52 = $this->env->getExtension("native_profiler");
        $__internal_5a9cdcb390878d5706eaa84b89aaf3be1e8a45d430983ca3b7d186394e90fe52->enter($__internal_5a9cdcb390878d5706eaa84b89aaf3be1e8a45d430983ca3b7d186394e90fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

        // line 4
        echo "  <div id=\"blocGauche\">
    <div><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/user.png"), "html", null, true);
        echo "\" id=\"userAccueil\"</img></div>
    <div id=\"connexion\">
      <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fsp_connexion");
        echo "\" alt=\"Connexion\" title=\"Connexion\">Connexion</a>
    </div>
    <div id=\"barreV\"></div>
    <div id=\"inscription\">
      <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fsp_inscription");
        echo "\" alt=\"S'inscrire\" title=\"S'inscrire\">S'inscrire</a>
    </div>
  </div>
";
        
        $__internal_5a9cdcb390878d5706eaa84b89aaf3be1e8a45d430983ca3b7d186394e90fe52->leave($__internal_5a9cdcb390878d5706eaa84b89aaf3be1e8a45d430983ca3b7d186394e90fe52_prof);

    }

    // line 15
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_f5584b35dba02aa989156da0ae1d469a1ad3e61b84a049b50bb54813560ee3c5 = $this->env->getExtension("native_profiler");
        $__internal_f5584b35dba02aa989156da0ae1d469a1ad3e61b84a049b50bb54813560ee3c5->enter($__internal_f5584b35dba02aa989156da0ae1d469a1ad3e61b84a049b50bb54813560ee3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 16
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
    <p class=\"presentation\">
       Bienvenue sur la site de la plateforme d'annonces pour étudiants étrangers arrivant en France.</br>
Pour accéder aux différents thèmes, il vous faut être connecté: grâce à cette inscription, vous pourrez être au courant des différents cours, évènements de la ville mais aussi des annonces pour les logements.</br>
Vous pourrez également contribuer à répondre à ses annonces par des commentaires.</br>
Alors, inscrivez-vous et bonne continuation sur le site !
    </p>
   </div>
  </div>
";
        
        $__internal_f5584b35dba02aa989156da0ae1d469a1ad3e61b84a049b50bb54813560ee3c5->leave($__internal_f5584b35dba02aa989156da0ae1d469a1ad3e61b84a049b50bb54813560ee3c5_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  83 => 15,  72 => 11,  65 => 7,  60 => 5,  57 => 4,  51 => 3,  44 => 15,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* {% block blocGauche %}*/
/*   <div id="blocGauche">*/
/*     <div><img src="{{asset('bundles/fsp/images/user.png')}}" id="userAccueil"</img></div>*/
/*     <div id="connexion">*/
/*       <a href="{{path('fsp_connexion')}}" alt="Connexion" title="Connexion">Connexion</a>*/
/*     </div>*/
/*     <div id="barreV"></div>*/
/*     <div id="inscription">*/
/*       <a href="{{path('fsp_inscription')}}" alt="S'inscrire" title="S'inscrire">S'inscrire</a>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*     <p class="presentation">*/
/*        Bienvenue sur la site de la plateforme d'annonces pour étudiants étrangers arrivant en France.</br>*/
/* Pour accéder aux différents thèmes, il vous faut être connecté: grâce à cette inscription, vous pourrez être au courant des différents cours, évènements de la ville mais aussi des annonces pour les logements.</br>*/
/* Vous pourrez également contribuer à répondre à ses annonces par des commentaires.</br>*/
/* Alors, inscrivez-vous et bonne continuation sur le site !*/
/*     </p>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
