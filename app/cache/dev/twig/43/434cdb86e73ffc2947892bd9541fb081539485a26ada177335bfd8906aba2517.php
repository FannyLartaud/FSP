<?php

/* FSPBundle:User:ajoutercom.html.twig */
class __TwigTemplate_6176128bc01bb39bd88c61862f29f6e9028598ceabf7bc73ea7bd87bdfa71811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:ajoutercom.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle:User:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_831446134881cc126d45f9e78f9595d695c47168fc6ced1b1c12edb09179f961 = $this->env->getExtension("native_profiler");
        $__internal_831446134881cc126d45f9e78f9595d695c47168fc6ced1b1c12edb09179f961->enter($__internal_831446134881cc126d45f9e78f9595d695c47168fc6ced1b1c12edb09179f961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajoutercom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831446134881cc126d45f9e78f9595d695c47168fc6ced1b1c12edb09179f961->leave($__internal_831446134881cc126d45f9e78f9595d695c47168fc6ced1b1c12edb09179f961_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_e6cedb40da848f28cf287fdd0beacf37bf542d705d9f20804e9500911b0cfc3f = $this->env->getExtension("native_profiler");
        $__internal_e6cedb40da848f28cf287fdd0beacf37bf542d705d9f20804e9500911b0cfc3f->enter($__internal_e6cedb40da848f28cf287fdd0beacf37bf542d705d9f20804e9500911b0cfc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <h3>Ajouter un commentaire</h3>
    </div>
     <form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fsp_validercommentaire");
        echo "\" class=\"formAjoutercom\">
      <div class=\"ajouter\">
       <label for=\"date\"> Date : </label>
       <input id=\"date\" type=\"date\" name=\"date\" placeholder=\"AAAA/MM/JJ\"/></br>
       <br/>
       <label for=\"info\"> Contenu du commentaire: </label></br>
       <textarea name=\"contenu\" id=\"info\" rows=\"10\" cols=\"50\"  onfocus=\"if(this.value=='Votre commentaire ici.'){this.value='';}\" onblur=\"if(this.value==''){this.value='Votre commentaire ici.';}\">Votre commentaire ici.</textarea>
       <br/>
       <input id=\"validerIns\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
       <input id=\"annulerIns\" type=\"reset\" value=\"Annuler\" name=\"annuler\"/>
      </div>
    </form>
   </div>
  </div>
";
        
        $__internal_e6cedb40da848f28cf287fdd0beacf37bf542d705d9f20804e9500911b0cfc3f->leave($__internal_e6cedb40da848f28cf287fdd0beacf37bf542d705d9f20804e9500911b0cfc3f_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:ajoutercom.html.twig";
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
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*      <h3>Ajouter un commentaire</h3>*/
/*     </div>*/
/*      <form method="POST" action="{{path('fsp_validercommentaire')}}" class="formAjoutercom">*/
/*       <div class="ajouter">*/
/*        <label for="date"> Date : </label>*/
/*        <input id="date" type="date" name="date" placeholder="AAAA/MM/JJ"/></br>*/
/*        <br/>*/
/*        <label for="info"> Contenu du commentaire: </label></br>*/
/*        <textarea name="contenu" id="info" rows="10" cols="50"  onfocus="if(this.value=='Votre commentaire ici.'){this.value='';}" onblur="if(this.value==''){this.value='Votre commentaire ici.';}">Votre commentaire ici.</textarea>*/
/*        <br/>*/
/*        <input id="validerIns" type="submit" value="Valider" name="valider"/>*/
/*        <input id="annulerIns" type="reset" value="Annuler" name="annuler"/>*/
/*       </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
