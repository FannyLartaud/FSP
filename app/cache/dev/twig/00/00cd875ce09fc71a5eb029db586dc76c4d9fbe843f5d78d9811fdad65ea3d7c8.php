<?php

/* FSPBundle:User:affichercom.html.twig */
class __TwigTemplate_ebcff11d8d49f1630358b300b3ddbcc3ddd8ca70fbb2a94a9f9eb3611be3e993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:affichercom.html.twig", 1);
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
        $__internal_ac6451da6d345dfa81a7ac252b514b83dc20c1c6582f7b59ef8fe93a12ec512a = $this->env->getExtension("native_profiler");
        $__internal_ac6451da6d345dfa81a7ac252b514b83dc20c1c6582f7b59ef8fe93a12ec512a->enter($__internal_ac6451da6d345dfa81a7ac252b514b83dc20c1c6582f7b59ef8fe93a12ec512a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:affichercom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6451da6d345dfa81a7ac252b514b83dc20c1c6582f7b59ef8fe93a12ec512a->leave($__internal_ac6451da6d345dfa81a7ac252b514b83dc20c1c6582f7b59ef8fe93a12ec512a_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_c087b8c5cd0ed93ca70996661fabe082fe03d2b058c87b9762dfdc9522266180 = $this->env->getExtension("native_profiler");
        $__internal_c087b8c5cd0ed93ca70996661fabe082fe03d2b058c87b9762dfdc9522266180->enter($__internal_c087b8c5cd0ed93ca70996661fabe082fe03d2b058c87b9762dfdc9522266180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
            echo "       ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 8
            echo "       ";
            $context["contenuannonce"] = $this->getAttribute($context["uneAnnonce"], "contenu", array());
            // line 9
            echo "       ";
            $context["dateannonce"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 10
            echo "       ";
            $context["prenomannonce"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 11
            echo "       ";
            $context["nomannonce"] = $this->getAttribute($context["uneAnnonce"], "nom", array());
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lesCommentaires"]) ? $context["lesCommentaires"] : $this->getContext($context, "lesCommentaires")));
            foreach ($context['_seq'] as $context["_key"] => $context["unCommentaire"]) {
                // line 13
                echo "      ";
                $context["contenu"] = $this->getAttribute($context["unCommentaire"], "contenu", array());
                // line 14
                echo "      ";
                $context["date"] = $this->getAttribute($context["unCommentaire"], "date", array());
                // line 15
                echo "      ";
                $context["prenom"] = $this->getAttribute($context["unCommentaire"], "prenom", array());
                // line 16
                echo "      ";
                $context["nom"] = $this->getAttribute($context["unCommentaire"], "nom", array());
                // line 17
                echo "       <h3>";
                echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
                echo "</h3>
      </div> 
     <p>";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["contenuannonce"]) ? $context["contenuannonce"] : $this->getContext($context, "contenuannonce")), "html", null, true);
                echo " </br>
       </br>
       Ajoutée le ";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["dateannonce"]) ? $context["dateannonce"] : $this->getContext($context, "dateannonce")), "html", null, true);
                echo " par ";
                echo twig_escape_filter($this->env, (isset($context["prenomannonce"]) ? $context["prenomannonce"] : $this->getContext($context, "prenomannonce")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["nomannonce"]) ? $context["nomannonce"] : $this->getContext($context, "nomannonce")), "html", null, true);
                echo "</p>

       <p> ";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
                echo " ajouté le ";
                echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
                echo " par ";
                echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
                echo " </p>
   </div>
  </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unCommentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c087b8c5cd0ed93ca70996661fabe082fe03d2b058c87b9762dfdc9522266180->leave($__internal_c087b8c5cd0ed93ca70996661fabe082fe03d2b058c87b9762dfdc9522266180_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:affichercom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  101 => 23,  92 => 21,  87 => 19,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*     {% for uneAnnonce in lesAnnonces %}*/
/*        {% set titre = uneAnnonce.titre %}*/
/*        {% set contenuannonce = uneAnnonce.contenu %}*/
/*        {% set dateannonce = uneAnnonce.date %}*/
/*        {% set prenomannonce = uneAnnonce.prenom %}*/
/*        {% set nomannonce = uneAnnonce.nom %}*/
/*     {% for unCommentaire in lesCommentaires %}*/
/*       {% set contenu = unCommentaire.contenu %}*/
/*       {% set date = unCommentaire.date %}*/
/*       {% set prenom = unCommentaire.prenom %}*/
/*       {% set nom = unCommentaire.nom %}*/
/*        <h3>{{titre}}</h3>*/
/*       </div> */
/*      <p>{{contenuannonce}} </br>*/
/*        </br>*/
/*        Ajoutée le {{dateannonce}} par {{prenomannonce}} {{nomannonce}}</p>*/
/* */
/*        <p> {{contenu}} ajouté le {{date}} par {{prenom}} {{nom}} </p>*/
/*    </div>*/
/*   </div>*/
/*     {% endfor %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
