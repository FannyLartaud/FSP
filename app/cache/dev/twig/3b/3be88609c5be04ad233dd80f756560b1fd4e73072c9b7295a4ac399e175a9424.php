<?php

/* FSPBundle:User:mesannonces.html.twig */
class __TwigTemplate_9ecf76d8d7da0ce484de864b399b2b1ac328d471032a1339f5e166f8d709c493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:mesannonces.html.twig", 1);
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
        $__internal_9186f7ed8eaccd9011a65f8567116e2cfaabd56be1b50c03fedf2500dc464776 = $this->env->getExtension("native_profiler");
        $__internal_9186f7ed8eaccd9011a65f8567116e2cfaabd56be1b50c03fedf2500dc464776->enter($__internal_9186f7ed8eaccd9011a65f8567116e2cfaabd56be1b50c03fedf2500dc464776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:mesannonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9186f7ed8eaccd9011a65f8567116e2cfaabd56be1b50c03fedf2500dc464776->leave($__internal_9186f7ed8eaccd9011a65f8567116e2cfaabd56be1b50c03fedf2500dc464776_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_c14d3088a9c5febe9c2d20dc1cf020a0b629afe420b218813854900d0f1fa555 = $this->env->getExtension("native_profiler");
        $__internal_c14d3088a9c5febe9c2d20dc1cf020a0b629afe420b218813854900d0f1fa555->enter($__internal_c14d3088a9c5febe9c2d20dc1cf020a0b629afe420b218813854900d0f1fa555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
       <h3>Mes Annonces</h3>
      </div>
     <table class =\"listeAnnonce\">
       ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 10
            echo "        ";
            $context["imageTheme"] = $this->getAttribute($context["uneAnnonce"], "imageTheme", array());
            // line 11
            echo "\t    ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 12
            echo "\t    ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 13
            echo "\t    ";
            $context["image"] = $this->getAttribute($context["uneAnnonce"], "image", array());
            // line 14
            echo "   
       <tr>
           <td class=\"theme\"><img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["imageTheme"]) ? $context["imageTheme"] : $this->getContext($context, "imageTheme")), "html", null, true);
            echo "\" id=\"theme\"></img></td>
\t       <td class=\"titre\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsp_afficherannonce", array("id" => $this->getAttribute($context["uneAnnonce"], "id", array()))), "html", null, true);
            echo "\" class=\"titreclick\" alt=\"titreannonce\">";
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</a></td>
           <td class=\"date\">Le ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"statut\"><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "     </table>
   </div>
  </div>
";
        
        $__internal_c14d3088a9c5febe9c2d20dc1cf020a0b629afe420b218813854900d0f1fa555->leave($__internal_c14d3088a9c5febe9c2d20dc1cf020a0b629afe420b218813854900d0f1fa555_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:mesannonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  83 => 19,  79 => 18,  73 => 17,  68 => 16,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*        <h3>Mes Annonces</h3>*/
/*       </div>*/
/*      <table class ="listeAnnonce">*/
/*        {% for uneAnnonce in lesAnnonces %}*/
/*         {% set imageTheme = uneAnnonce.imageTheme %}*/
/* 	    {% set titre      = uneAnnonce.titre %}*/
/* 	    {% set date       = uneAnnonce.date %}*/
/* 	    {% set image      = uneAnnonce.image %}*/
/*    */
/*        <tr>*/
/*            <td class="theme"><img src="{{asset('bundles/fsp/images/')}}{{imageTheme}}" id="theme"></img></td>*/
/* 	       <td class="titre"><a href="{{path('fsp_afficherannonce',{'id':uneAnnonce.id})}}" class="titreclick" alt="titreannonce">{{titre}}</a></td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="statut"><img src="{{asset('bundles/fsp/images/')}}{{image}}" id="statut"></img></td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*      </table>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
