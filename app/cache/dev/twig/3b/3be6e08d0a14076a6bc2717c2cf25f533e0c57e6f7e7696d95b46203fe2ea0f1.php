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
        $__internal_7de8744722417e955177782ca39be7e687ea0777eb6c0d7d57ec9d6911cddcfb = $this->env->getExtension("native_profiler");
        $__internal_7de8744722417e955177782ca39be7e687ea0777eb6c0d7d57ec9d6911cddcfb->enter($__internal_7de8744722417e955177782ca39be7e687ea0777eb6c0d7d57ec9d6911cddcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de8744722417e955177782ca39be7e687ea0777eb6c0d7d57ec9d6911cddcfb->leave($__internal_7de8744722417e955177782ca39be7e687ea0777eb6c0d7d57ec9d6911cddcfb_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_1c8ff6d9dbe7fa5d94d9590e56db69c5da9076c0541f2d9b12de835edcb416c3 = $this->env->getExtension("native_profiler");
        $__internal_1c8ff6d9dbe7fa5d94d9590e56db69c5da9076c0541f2d9b12de835edcb416c3->enter($__internal_1c8ff6d9dbe7fa5d94d9590e56db69c5da9076c0541f2d9b12de835edcb416c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        
        $__internal_1c8ff6d9dbe7fa5d94d9590e56db69c5da9076c0541f2d9b12de835edcb416c3->leave($__internal_1c8ff6d9dbe7fa5d94d9590e56db69c5da9076c0541f2d9b12de835edcb416c3_prof);

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
