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
        $__internal_7a04c0f9fb4bdcb6e1f33cd572262ee25699cb86fe5565dc4cb243271cc01b54 = $this->env->getExtension("native_profiler");
        $__internal_7a04c0f9fb4bdcb6e1f33cd572262ee25699cb86fe5565dc4cb243271cc01b54->enter($__internal_7a04c0f9fb4bdcb6e1f33cd572262ee25699cb86fe5565dc4cb243271cc01b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a04c0f9fb4bdcb6e1f33cd572262ee25699cb86fe5565dc4cb243271cc01b54->leave($__internal_7a04c0f9fb4bdcb6e1f33cd572262ee25699cb86fe5565dc4cb243271cc01b54_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b0e62fd905cc58c6fbb7b7f1eaac9f03a7c7dbdbb3e546a838bc4a280c542c = $this->env->getExtension("native_profiler");
        $__internal_25b0e62fd905cc58c6fbb7b7f1eaac9f03a7c7dbdbb3e546a838bc4a280c542c->enter($__internal_25b0e62fd905cc58c6fbb7b7f1eaac9f03a7c7dbdbb3e546a838bc4a280c542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 15
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_25b0e62fd905cc58c6fbb7b7f1eaac9f03a7c7dbdbb3e546a838bc4a280c542c->leave($__internal_25b0e62fd905cc58c6fbb7b7f1eaac9f03a7c7dbdbb3e546a838bc4a280c542c_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_ff8d3d4a62496114fcedc0a3b92ff3bfe4e539dae0c6c9f0b5162ef526d8a1a4 = $this->env->getExtension("native_profiler");
        $__internal_ff8d3d4a62496114fcedc0a3b92ff3bfe4e539dae0c6c9f0b5162ef526d8a1a4->enter($__internal_ff8d3d4a62496114fcedc0a3b92ff3bfe4e539dae0c6c9f0b5162ef526d8a1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
        
        $__internal_ff8d3d4a62496114fcedc0a3b92ff3bfe4e539dae0c6c9f0b5162ef526d8a1a4->leave($__internal_ff8d3d4a62496114fcedc0a3b92ff3bfe4e539dae0c6c9f0b5162ef526d8a1a4_prof);

    }

    // line 15
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_d75555399e14323c28af551ef676c5d9c916014ead0e52083b1aaa701c675957 = $this->env->getExtension("native_profiler");
        $__internal_d75555399e14323c28af551ef676c5d9c916014ead0e52083b1aaa701c675957->enter($__internal_d75555399e14323c28af551ef676c5d9c916014ead0e52083b1aaa701c675957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        
        $__internal_d75555399e14323c28af551ef676c5d9c916014ead0e52083b1aaa701c675957->leave($__internal_d75555399e14323c28af551ef676c5d9c916014ead0e52083b1aaa701c675957_prof);

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
