<?php

/* FSPBundle:Theme:cours.html.twig */
class __TwigTemplate_7106254822d55dc7bded6b4b209d867f02d9fd588cca994b8b785486bed17180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:Theme:cours.html.twig", 1);
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
        $__internal_12172ca359d47bce07677f8dbae515d7ffd3d83dc72313a05e37a13877b3f0c9 = $this->env->getExtension("native_profiler");
        $__internal_12172ca359d47bce07677f8dbae515d7ffd3d83dc72313a05e37a13877b3f0c9->enter($__internal_12172ca359d47bce07677f8dbae515d7ffd3d83dc72313a05e37a13877b3f0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:cours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12172ca359d47bce07677f8dbae515d7ffd3d83dc72313a05e37a13877b3f0c9->leave($__internal_12172ca359d47bce07677f8dbae515d7ffd3d83dc72313a05e37a13877b3f0c9_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_5db498abb3b59aafed80e7689dd226ca2003f3fa6338c7c520cd238c30aa1025 = $this->env->getExtension("native_profiler");
        $__internal_5db498abb3b59aafed80e7689dd226ca2003f3fa6338c7c520cd238c30aa1025->enter($__internal_5db498abb3b59aafed80e7689dd226ca2003f3fa6338c7c520cd238c30aa1025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"AnnoncesTheme\">
     <h3>Annonces - Cours</h3>
    </div>
    <table class =\"listeAnnonce\">
       ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 10
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 11
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 12
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 13
            echo "         ";
            $context["image"] = $this->getAttribute($context["uneAnnonce"], "image", array());
            // line 14
            echo "         ";
            $context["idannonce"] = $this->getAttribute($context["uneAnnonce"], "id", array());
            // line 15
            echo "
       <tr>
           <td class=\"titre\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsp_afficherannonce", array("id" => $this->getAttribute($context["uneAnnonce"], "id", array()))), "html", null, true);
            echo "\" class=\"titreclick\" alt=\"titreannonce\">";
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</a></td>
           <td class=\"date\">Le ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "      </table>
     </div>
    </div>
";
        
        $__internal_5db498abb3b59aafed80e7689dd226ca2003f3fa6338c7c520cd238c30aa1025->leave($__internal_5db498abb3b59aafed80e7689dd226ca2003f3fa6338c7c520cd238c30aa1025_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  85 => 20,  81 => 19,  77 => 18,  71 => 17,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="AnnoncesTheme">*/
/*      <h3>Annonces - Cours</h3>*/
/*     </div>*/
/*     <table class ="listeAnnonce">*/
/*        {% for uneAnnonce in lesAnnonces %}*/
/*          {% set titre  = uneAnnonce.titre %}*/
/*          {% set date   =  uneAnnonce.date %}*/
/*          {% set prenom =  uneAnnonce.prenom %}*/
/*          {% set image   =  uneAnnonce.image %}*/
/*          {% set idannonce = uneAnnonce.id %}*/
/* */
/*        <tr>*/
/*            <td class="titre"><a href="{{path('fsp_afficherannonce',{'id':uneAnnonce.id})}}" class="titreclick" alt="titreannonce">{{titre}}</a></td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="prenom">Par {{prenom}}</td>*/
/*            <td class="statut"><img src="{{asset('bundles/fsp/images/')}}{{image}}" id="statut"></img></td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>*/
/*      </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
