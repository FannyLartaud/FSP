<?php

/* FSPBundle:User:inscription.html.twig */
class __TwigTemplate_ae18c057614c68b3a43649d8382f3dbfeb9aadfc52a70dfd8291a83f003fd188 extends Twig_Template
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
        $__internal_14852ca564211d4c93d02828799f2bedbfc8b5b0f4ecda6bc1b39a9714f74c02 = $this->env->getExtension("native_profiler");
        $__internal_14852ca564211d4c93d02828799f2bedbfc8b5b0f4ecda6bc1b39a9714f74c02->enter($__internal_14852ca564211d4c93d02828799f2bedbfc8b5b0f4ecda6bc1b39a9714f74c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14852ca564211d4c93d02828799f2bedbfc8b5b0f4ecda6bc1b39a9714f74c02->leave($__internal_14852ca564211d4c93d02828799f2bedbfc8b5b0f4ecda6bc1b39a9714f74c02_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_f932f7e377a0224981db0a6721e768b6f41a73d77da84c9bb022b43ef47ade38 = $this->env->getExtension("native_profiler");
        $__internal_f932f7e377a0224981db0a6721e768b6f41a73d77da84c9bb022b43ef47ade38->enter($__internal_f932f7e377a0224981db0a6721e768b6f41a73d77da84c9bb022b43ef47ade38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
       <input id=\"info\" type=\"date\" name=\"dateNaissance\" placeholder=\"Date de naissance AAAA/MM/JJ *\"/>
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
        
        $__internal_f932f7e377a0224981db0a6721e768b6f41a73d77da84c9bb022b43ef47ade38->leave($__internal_f932f7e377a0224981db0a6721e768b6f41a73d77da84c9bb022b43ef47ade38_prof);

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
/*        <input id="info" type="date" name="dateNaissance" placeholder="Date de naissance AAAA/MM/JJ *"/>*/
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
