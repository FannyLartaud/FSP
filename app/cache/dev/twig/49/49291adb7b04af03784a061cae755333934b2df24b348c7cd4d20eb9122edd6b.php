<?php

/* FSPBundle:Theme:logement.html.twig */
class __TwigTemplate_bb39ac05172af67414dbb135417878b600adbdc939713577b8f5a1a0569f2b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:Theme:logement.html.twig", 1);
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
        $__internal_e5410d69c27698a4229b90d64d61ad1f7632a095758a4799b816ae0fd00b7710 = $this->env->getExtension("native_profiler");
        $__internal_e5410d69c27698a4229b90d64d61ad1f7632a095758a4799b816ae0fd00b7710->enter($__internal_e5410d69c27698a4229b90d64d61ad1f7632a095758a4799b816ae0fd00b7710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:Theme:logement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5410d69c27698a4229b90d64d61ad1f7632a095758a4799b816ae0fd00b7710->leave($__internal_e5410d69c27698a4229b90d64d61ad1f7632a095758a4799b816ae0fd00b7710_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_e11e1c11d953e48a2a9aabe7c36ea51b27cc6d12370e89ea373f554e51beaf5e = $this->env->getExtension("native_profiler");
        $__internal_e11e1c11d953e48a2a9aabe7c36ea51b27cc6d12370e89ea373f554e51beaf5e->enter($__internal_e11e1c11d953e48a2a9aabe7c36ea51b27cc6d12370e89ea373f554e51beaf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"AnnoncesTheme\">
     <h3>Annonces - Logement</h3>
    </div>
     <table class =\"listeAnnonce\">

       ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 11
            echo "         ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 12
            echo "         ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 13
            echo "         ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 14
            echo "         ";
            $context["image"] = $this->getAttribute($context["uneAnnonce"], "image", array());
            // line 15
            echo "         ";
            $context["idannonce"] = $this->getAttribute($context["uneAnnonce"], "id", array());
            // line 16
            echo "
       <tr>
           <td class=\"titre\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsp_afficherannonce", array("id" => $this->getAttribute($context["uneAnnonce"], "id", array()))), "html", null, true);
            echo "\" class=\"titreclick\" alt=\"titreannonce\">";
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</a></td>
           <td class=\"date\">Le ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"prenom\">Par ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</td>
           <td class=\"statut\"><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </table>
   </div>
  </div>
";
        
        $__internal_e11e1c11d953e48a2a9aabe7c36ea51b27cc6d12370e89ea373f554e51beaf5e->leave($__internal_e11e1c11d953e48a2a9aabe7c36ea51b27cc6d12370e89ea373f554e51beaf5e_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:Theme:logement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  86 => 21,  82 => 20,  78 => 19,  72 => 18,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="AnnoncesTheme">*/
/*      <h3>Annonces - Logement</h3>*/
/*     </div>*/
/*      <table class ="listeAnnonce">*/
/* */
/*        {% for uneAnnonce in lesAnnonces %}*/
/*          {% set titre  =  uneAnnonce.titre %}*/
/*          {% set date   =  uneAnnonce.date %}*/
/*          {% set prenom =  uneAnnonce.prenom %}*/
/*          {% set image  =  uneAnnonce.image %}*/
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
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
