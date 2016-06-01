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
        $__internal_ad07e42c07e3ad79ec4bb43564eaf48411a11a5f4aadadbc6c2739156f13ab61 = $this->env->getExtension("native_profiler");
        $__internal_ad07e42c07e3ad79ec4bb43564eaf48411a11a5f4aadadbc6c2739156f13ab61->enter($__internal_ad07e42c07e3ad79ec4bb43564eaf48411a11a5f4aadadbc6c2739156f13ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad07e42c07e3ad79ec4bb43564eaf48411a11a5f4aadadbc6c2739156f13ab61->leave($__internal_ad07e42c07e3ad79ec4bb43564eaf48411a11a5f4aadadbc6c2739156f13ab61_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_4cbb6a44a988018e4ce54da32006ffddbec78e8eec8d717b4df6011d0ea7d9c9 = $this->env->getExtension("native_profiler");
        $__internal_4cbb6a44a988018e4ce54da32006ffddbec78e8eec8d717b4df6011d0ea7d9c9->enter($__internal_4cbb6a44a988018e4ce54da32006ffddbec78e8eec8d717b4df6011d0ea7d9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        
        $__internal_4cbb6a44a988018e4ce54da32006ffddbec78e8eec8d717b4df6011d0ea7d9c9->leave($__internal_4cbb6a44a988018e4ce54da32006ffddbec78e8eec8d717b4df6011d0ea7d9c9_prof);

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
