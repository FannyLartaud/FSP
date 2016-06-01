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
        $__internal_f16d51f35ac4df0ca4c28837f7bceacf36e365483ff4d5b780bc91b3f9e030cd = $this->env->getExtension("native_profiler");
        $__internal_f16d51f35ac4df0ca4c28837f7bceacf36e365483ff4d5b780bc91b3f9e030cd->enter($__internal_f16d51f35ac4df0ca4c28837f7bceacf36e365483ff4d5b780bc91b3f9e030cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:affichercom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16d51f35ac4df0ca4c28837f7bceacf36e365483ff4d5b780bc91b3f9e030cd->leave($__internal_f16d51f35ac4df0ca4c28837f7bceacf36e365483ff4d5b780bc91b3f9e030cd_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_e3da0310c60fc8b7710182ab9402242e3c6b5d980382d508c5c99fbd6f04bcdc = $this->env->getExtension("native_profiler");
        $__internal_e3da0310c60fc8b7710182ab9402242e3c6b5d980382d508c5c99fbd6f04bcdc->enter($__internal_e3da0310c60fc8b7710182ab9402242e3c6b5d980382d508c5c99fbd6f04bcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesCommentaires"]) ? $context["lesCommentaires"] : $this->getContext($context, "lesCommentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["unCommentaire"]) {
            // line 7
            echo "      ";
            $context["contenu"] = $this->getAttribute($context["unCommentaire"], "contenu", array());
            // line 8
            echo "      ";
            $context["date"] = $this->getAttribute($context["unCommentaire"], "date", array());
            // line 9
            echo "      ";
            $context["prenom"] = $this->getAttribute($context["unCommentaire"], "prenom", array());
            // line 10
            echo "      ";
            $context["nom"] = $this->getAttribute($context["unCommentaire"], "nom", array());
            // line 11
            echo "       <h3>";
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</h3>
      </div> 
     <p>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
            echo " </br>
       </br>
       Ajoutée le ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
            echo "</p>
   </div>
  </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unCommentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e3da0310c60fc8b7710182ab9402242e3c6b5d980382d508c5c99fbd6f04bcdc->leave($__internal_e3da0310c60fc8b7710182ab9402242e3c6b5d980382d508c5c99fbd6f04bcdc_prof);

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
        return array (  72 => 15,  67 => 13,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*     {% for unCommentaire in lesCommentaires %}*/
/*       {% set contenu = unCommentaire.contenu %}*/
/*       {% set date = unCommentaire.date %}*/
/*       {% set prenom = unCommentaire.prenom %}*/
/*       {% set nom = unCommentaire.nom %}*/
/*        <h3>{{titre}}</h3>*/
/*       </div> */
/*      <p>{{contenu}} </br>*/
/*        </br>*/
/*        Ajoutée le {{date}} par {{prenom}} {{nom}}</p>*/
/*    </div>*/
/*   </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
