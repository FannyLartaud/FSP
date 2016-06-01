<?php

/* FSPBundle:User:modifierannonce.html.twig */
class __TwigTemplate_dbb946f38a7448929812faa71a12c071ae6d4ba70bb620d72307f94119170692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:modifierannonce.html.twig", 1);
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
        $__internal_6c910e5196792cfae9dd8b17b3b8dda6cdd08585a835f09f18232dc4b3e9842f = $this->env->getExtension("native_profiler");
        $__internal_6c910e5196792cfae9dd8b17b3b8dda6cdd08585a835f09f18232dc4b3e9842f->enter($__internal_6c910e5196792cfae9dd8b17b3b8dda6cdd08585a835f09f18232dc4b3e9842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:modifierannonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c910e5196792cfae9dd8b17b3b8dda6cdd08585a835f09f18232dc4b3e9842f->leave($__internal_6c910e5196792cfae9dd8b17b3b8dda6cdd08585a835f09f18232dc4b3e9842f_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_8fcfb95e4012fbd14ff96cc3d8c97786cfdd5e143d69abace786ffc3d00de731 = $this->env->getExtension("native_profiler");
        $__internal_8fcfb95e4012fbd14ff96cc3d8c97786cfdd5e143d69abace786ffc3d00de731->enter($__internal_8fcfb95e4012fbd14ff96cc3d8c97786cfdd5e143d69abace786ffc3d00de731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
       ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 7
            echo "        ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 8
            echo "        ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 9
            echo "        ";
            $context["theme"] = $this->getAttribute($context["uneAnnonce"], "theme", array());
            // line 10
            echo "        ";
            $context["contenu"] = $this->getAttribute($context["uneAnnonce"], "contenu", array());
            // line 11
            echo "        ";
            $context["langue"] = $this->getAttribute($context["uneAnnonce"], "langue", array());
            // line 12
            echo "        ";
            $context["idannonce"] = $this->getAttribute($context["uneAnnonce"], "id", array());
            // line 13
            echo "     <h3>Modifier une annonce</h3>
    </div>
    <form method=\"POST\" action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsp_validermodifier", array("id" => $this->getAttribute($context["uneAnnonce"], "id", array()))), "html", null, true);
            echo "\" class=\"formModifier\">
      <div class=\"ajouter\">
       <label for=\"titre\"> Titre : </label>
       <input id=\"titre\" type=\"text\" name=\"titre\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "\"/></br>
       <br/>
       <label for=\"date\"> Date : </label>
       <input id=\"date\" type=\"date\" name=\"date\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "\"/></br>
       <br/>
       <label for=\"langue\"> Langue : </label>
       <select id=\"langue\" name=\"langue\">
        <option value=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")), "html", null, true);
            echo "\" select=\"selected\" >Toutes les langues</option>
        <option value=\"Français\">Français</option>
        <option value='Anglais'>Anglais</option>
        <option value='Chinois'>Chinois</option>
       </select></br>
       <br/>
       <label for=\"theme\"> Thème : </label>
       <select id=\"theme\" name=\"theme\">
        <option value=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
            echo "\" select=\"selected\">Tous les thèmes</option>
        <option value=\"Logement\">Logement</option>
        <option value=\"Cours\">Cours</option>
        <option value=\"Evenement\">Evénement</option>
        <option value=\"Culture\">Culture</option>
       </select></br>
       <br/>
       <label for=\"info\"> Contenu de l'annonce : </label></br>
       <textarea name=\"contenu\" id=\"info\" rows=\"10\" cols=\"50\" >";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
            echo "</textarea>
       <br/>
       <input id=\"validerIns\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
       <input id=\"annulerIns\" type=\"reset\" value=\"Annuler\" name=\"annuler\"/>
      </div>
    </form>
   </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8fcfb95e4012fbd14ff96cc3d8c97786cfdd5e143d69abace786ffc3d00de731->leave($__internal_8fcfb95e4012fbd14ff96cc3d8c97786cfdd5e143d69abace786ffc3d00de731_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:modifierannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  101 => 33,  90 => 25,  83 => 21,  77 => 18,  71 => 15,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*        {% for uneAnnonce in lesAnnonces %}*/
/*         {% set titre      = uneAnnonce.titre %}*/
/*         {% set date       = uneAnnonce.date %}*/
/*         {% set theme      = uneAnnonce.theme %}*/
/*         {% set contenu    = uneAnnonce.contenu %}*/
/*         {% set langue     = uneAnnonce.langue %}*/
/*         {% set idannonce  = uneAnnonce.id %}*/
/*      <h3>Modifier une annonce</h3>*/
/*     </div>*/
/*     <form method="POST" action="{{path('fsp_validermodifier',{'id':uneAnnonce.id})}}" class="formModifier">*/
/*       <div class="ajouter">*/
/*        <label for="titre"> Titre : </label>*/
/*        <input id="titre" type="text" name="titre" value="{{titre}}"/></br>*/
/*        <br/>*/
/*        <label for="date"> Date : </label>*/
/*        <input id="date" type="date" name="date" value="{{date}}"/></br>*/
/*        <br/>*/
/*        <label for="langue"> Langue : </label>*/
/*        <select id="langue" name="langue">*/
/*         <option value="{{langue}}" select="selected" >Toutes les langues</option>*/
/*         <option value="Français">Français</option>*/
/*         <option value='Anglais'>Anglais</option>*/
/*         <option value='Chinois'>Chinois</option>*/
/*        </select></br>*/
/*        <br/>*/
/*        <label for="theme"> Thème : </label>*/
/*        <select id="theme" name="theme">*/
/*         <option value="{{theme}}" select="selected">Tous les thèmes</option>*/
/*         <option value="Logement">Logement</option>*/
/*         <option value="Cours">Cours</option>*/
/*         <option value="Evenement">Evénement</option>*/
/*         <option value="Culture">Culture</option>*/
/*        </select></br>*/
/*        <br/>*/
/*        <label for="info"> Contenu de l'annonce : </label></br>*/
/*        <textarea name="contenu" id="info" rows="10" cols="50" >{{contenu}}</textarea>*/
/*        <br/>*/
/*        <input id="validerIns" type="submit" value="Valider" name="valider"/>*/
/*        <input id="annulerIns" type="reset" value="Annuler" name="annuler"/>*/
/*       </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
