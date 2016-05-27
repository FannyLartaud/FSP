<?php

/* FSPBundle:User:ajouterannonce.html.twig */
class __TwigTemplate_31fe140f16d0e6f971ce6fad6b1d028bf696c49369dda59bff993cdfb8765471 extends Twig_Template
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
        $__internal_09777945999a9f6892b3008d217f35626398dab709cd8476196f9aa540913642 = $this->env->getExtension("native_profiler");
        $__internal_09777945999a9f6892b3008d217f35626398dab709cd8476196f9aa540913642->enter($__internal_09777945999a9f6892b3008d217f35626398dab709cd8476196f9aa540913642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajouterannonce.html.twig"));

        // line 1
        echo "

    <form method=\"POST\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fsp_validerajouter");
        echo "\" class=\"formAjouter\">
      <div class=\"ajouter\">
       <label for=\"titre\"> Titre : </label>
       <input id=\"titre\" type=\"text\" name=\"titre\"/></br>
       <br/>
       <label for=\"date\"> Date : </label>
       <input id=\"date\" type=\"date\" name=\"date\"/></br>
       <br/>
       <label for=\"langue\"> Langue : </label>
       <select id=\"langue\" name=\"langue\">
        <option value='Toutes les langues' select=\"selected\">Toutes les langues</option>
        <option value=\"Français\">Français</option>
        <option value='Anglais'>Anglais</option>
        <option value='Chinois'>Chinois</option>
       </select></br>
       <br/>
       <label for=\"theme\"> Thème : </label>
       <select id=\"theme\" name=\"theme\">
        <option value=\"Tous les themes\" select=\"selected\">Tous les thèmes</option>
        <option value=\"Logement\">Logement</option>
        <option value=\"Cours\">Cours</option>
        <option value=\"Evenement\">Evénement</option>
        <option value=\"Culture\">Culture</option>
       </select></br>
       <br/>
       <label for=\"info\"> Contenu de l'annonce : </label></br>
       <textarea name=\"contenu\" id=\"info\" rows=\"10\" cols=\"50\"  onfocus=\"if(this.value=='Votre annonce ici.'){this.value='';}\" onblur=\"if(this.value==''){this.value='Votre annonce ici.';}\">Votre annonce ici.</textarea>
       <br/>
       <input id=\"validerIns\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
       <input id=\"annulerIns\" type=\"reset\" value=\"Annuler\" name=\"annuler\"/>
      </div>
    </form>



";
        
        $__internal_09777945999a9f6892b3008d217f35626398dab709cd8476196f9aa540913642->leave($__internal_09777945999a9f6892b3008d217f35626398dab709cd8476196f9aa540913642_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:ajouterannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* */
/* */
/*     <form method="POST" action="{{path('fsp_validerajouter')}}" class="formAjouter">*/
/*       <div class="ajouter">*/
/*        <label for="titre"> Titre : </label>*/
/*        <input id="titre" type="text" name="titre"/></br>*/
/*        <br/>*/
/*        <label for="date"> Date : </label>*/
/*        <input id="date" type="date" name="date"/></br>*/
/*        <br/>*/
/*        <label for="langue"> Langue : </label>*/
/*        <select id="langue" name="langue">*/
/*         <option value='Toutes les langues' select="selected">Toutes les langues</option>*/
/*         <option value="Français">Français</option>*/
/*         <option value='Anglais'>Anglais</option>*/
/*         <option value='Chinois'>Chinois</option>*/
/*        </select></br>*/
/*        <br/>*/
/*        <label for="theme"> Thème : </label>*/
/*        <select id="theme" name="theme">*/
/*         <option value="Tous les themes" select="selected">Tous les thèmes</option>*/
/*         <option value="Logement">Logement</option>*/
/*         <option value="Cours">Cours</option>*/
/*         <option value="Evenement">Evénement</option>*/
/*         <option value="Culture">Culture</option>*/
/*        </select></br>*/
/*        <br/>*/
/*        <label for="info"> Contenu de l'annonce : </label></br>*/
/*        <textarea name="contenu" id="info" rows="10" cols="50"  onfocus="if(this.value=='Votre annonce ici.'){this.value='';}" onblur="if(this.value==''){this.value='Votre annonce ici.';}">Votre annonce ici.</textarea>*/
/*        <br/>*/
/*        <input id="validerIns" type="submit" value="Valider" name="valider"/>*/
/*        <input id="annulerIns" type="reset" value="Annuler" name="annuler"/>*/
/*       </div>*/
/*     </form>*/
/* */
/* */
/* */
/* */
