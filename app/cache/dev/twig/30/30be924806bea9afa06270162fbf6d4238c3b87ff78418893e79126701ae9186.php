<?php

/* FSPBundle:User:compte.html.twig */
class __TwigTemplate_b459cfc9cd6473c4b0dc49e687778454bc4fea577fce6349e1aac1daa7b70d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:compte.html.twig", 1);
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
        $__internal_1e9197f9342e4eac23d3220af2497a9fe53e920ddaed1140bbb7e6da5bb7f1f2 = $this->env->getExtension("native_profiler");
        $__internal_1e9197f9342e4eac23d3220af2497a9fe53e920ddaed1140bbb7e6da5bb7f1f2->enter($__internal_1e9197f9342e4eac23d3220af2497a9fe53e920ddaed1140bbb7e6da5bb7f1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:compte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9197f9342e4eac23d3220af2497a9fe53e920ddaed1140bbb7e6da5bb7f1f2->leave($__internal_1e9197f9342e4eac23d3220af2497a9fe53e920ddaed1140bbb7e6da5bb7f1f2_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_2609621dc86972625607a3ebc869212cff4e6e676bb56c4764135f8a229a30c1 = $this->env->getExtension("native_profiler");
        $__internal_2609621dc86972625607a3ebc869212cff4e6e676bb56c4764135f8a229a30c1->enter($__internal_2609621dc86972625607a3ebc869212cff4e6e676bb56c4764135f8a229a30c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
      <div id=\"Compte\">
       <h3>Mon Compte</h3>
       <p>
\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
        echo "
       </p>
     </div>
     <table class =\"listeAnnonce\">
       ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesAnnonces"]) ? $context["lesAnnonces"] : $this->getContext($context, "lesAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["uneAnnonce"]) {
            // line 14
            echo "        ";
            $context["imageTheme"] = $this->getAttribute($context["uneAnnonce"], "imageTheme", array());
            // line 15
            echo "\t    ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 16
            echo "\t    ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 17
            echo "\t    ";
            $context["image"] = $this->getAttribute($context["uneAnnonce"], "image", array());
            // line 18
            echo "   
       <tr>
           <td class=\"theme\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["imageTheme"]) ? $context["imageTheme"] : $this->getContext($context, "imageTheme")), "html", null, true);
            echo "\" id=\"theme\"></img></td>
\t       <td class=\"titre\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsp_afficherannonce", array("id" => $this->getAttribute($context["uneAnnonce"], "id", array()))), "html", null, true);
            echo "\" class=\"titreclick\" alt=\"titreannonce\">";
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</a></td>
           <td class=\"date\">Le ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"statut\"><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "     </table>
   </div>
  </div>
";
        
        $__internal_2609621dc86972625607a3ebc869212cff4e6e676bb56c4764135f8a229a30c1->leave($__internal_2609621dc86972625607a3ebc869212cff4e6e676bb56c4764135f8a229a30c1_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  93 => 23,  89 => 22,  83 => 21,  78 => 20,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  58 => 13,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*       <div id="Compte">*/
/*        <h3>Mon Compte</h3>*/
/*        <p>*/
/* 	{{app.session.get('prenom')}}*/
/* 	{{app.session.get('nom')}}*/
/*        </p>*/
/*      </div>*/
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
