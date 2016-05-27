<?php

/* FSPBundle:User:inscription.html.twig */
class __TwigTemplate_9631ff6192622da61b3015de9e3134212542461a0055371e38019181c7d165c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:inscription.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbecc6477aae9f82a18084dafd26913376c2d093ec7cfb8e46b2a993a6f35c21 = $this->env->getExtension("native_profiler");
        $__internal_bbecc6477aae9f82a18084dafd26913376c2d093ec7cfb8e46b2a993a6f35c21->enter($__internal_bbecc6477aae9f82a18084dafd26913376c2d093ec7cfb8e46b2a993a6f35c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbecc6477aae9f82a18084dafd26913376c2d093ec7cfb8e46b2a993a6f35c21->leave($__internal_bbecc6477aae9f82a18084dafd26913376c2d093ec7cfb8e46b2a993a6f35c21_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_79f7e631726b90ac8440593a5bef7bb8a5d7164444a90700a31d02522122d21d = $this->env->getExtension("native_profiler");
        $__internal_79f7e631726b90ac8440593a5bef7bb8a5d7164444a90700a31d02522122d21d->enter($__internal_79f7e631726b90ac8440593a5bef7bb8a5d7164444a90700a31d02522122d21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
    <div id=\"gererInscription\">
     <h3>Inscription</h3>
    </div>
    <form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fsp_validerinscription");
        echo "\" class=\"formInscription\">
      <div class=\"inscription\">
       <input id=\"nom\" type=\"text\" name=\"nom\" placeholder=\"Nom *\"/>
       <input id=\"info\" type=\"text\" name=\"prenom\" placeholder=\"Prénom *\"/>
       <input id=\"info\" type=\"text\" name=\"dateNaissance\" placeholder=\"Date de Naissance *\"/>
       <input id=\"info\" type=\"text\" name=\"pays\" placeholder=\"Pays *\"/>
       <input id=\"info\" type=\"text\" name=\"email\" placeholder=\"E-mail *\"/>
       <input id=\"info\" type=\"password\" name=\"mdp\" placeholder=\"Mot de Passe *\"/>
       <input id=\"validerIns\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
       <input id=\"annulerIns\" type=\"reset\" value=\"Annuler\" name=\"annuler\"/>
      </div>
    </form>
   </div>
  </div>
";
        
        $__internal_79f7e631726b90ac8440593a5bef7bb8a5d7164444a90700a31d02522122d21d->leave($__internal_79f7e631726b90ac8440593a5bef7bb8a5d7164444a90700a31d02522122d21d_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*     <div id="gererInscription">*/
/*      <h3>Inscription</h3>*/
/*     </div>*/
/*     <form method="POST" action="{{path('fsp_validerinscription')}}" class="formInscription">*/
/*       <div class="inscription">*/
/*        <input id="nom" type="text" name="nom" placeholder="Nom *"/>*/
/*        <input id="info" type="text" name="prenom" placeholder="Prénom *"/>*/
/*        <input id="info" type="text" name="dateNaissance" placeholder="Date de Naissance *"/>*/
/*        <input id="info" type="text" name="pays" placeholder="Pays *"/>*/
/*        <input id="info" type="text" name="email" placeholder="E-mail *"/>*/
/*        <input id="info" type="password" name="mdp" placeholder="Mot de Passe *"/>*/
/*        <input id="validerIns" type="submit" value="Valider" name="valider"/>*/
/*        <input id="annulerIns" type="reset" value="Annuler" name="annuler"/>*/
/*       </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
