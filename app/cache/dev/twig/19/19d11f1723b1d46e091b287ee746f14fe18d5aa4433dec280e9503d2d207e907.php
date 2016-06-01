<?php

/* FSPBundle:User:afficherannonce.html.twig */
class __TwigTemplate_1bbce0341954c448a92ac97109242013f69f9e88eca349490f3d848847cc10c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:afficherannonce.html.twig", 1);
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
        $__internal_1a06f87f9746b14b83babe218cec17e6b3232479d2ca30525353ef6ddbfb7ec5 = $this->env->getExtension("native_profiler");
        $__internal_1a06f87f9746b14b83babe218cec17e6b3232479d2ca30525353ef6ddbfb7ec5->enter($__internal_1a06f87f9746b14b83babe218cec17e6b3232479d2ca30525353ef6ddbfb7ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:afficherannonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a06f87f9746b14b83babe218cec17e6b3232479d2ca30525353ef6ddbfb7ec5->leave($__internal_1a06f87f9746b14b83babe218cec17e6b3232479d2ca30525353ef6ddbfb7ec5_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_bf598858bc5e5a604966a148c8d06ef8b65a49dadff10b8605f05c749f64c9d9 = $this->env->getExtension("native_profiler");
        $__internal_bf598858bc5e5a604966a148c8d06ef8b65a49dadff10b8605f05c749f64c9d9->enter($__internal_bf598858bc5e5a604966a148c8d06ef8b65a49dadff10b8605f05c749f64c9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
            echo "      ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 8
            echo "      ";
            $context["contenu"] = $this->getAttribute($context["uneAnnonce"], "contenu", array());
            // line 9
            echo "      ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 10
            echo "      ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 11
            echo "      ";
            $context["nom"] = $this->getAttribute($context["uneAnnonce"], "nom", array());
            // line 12
            echo "       <h3>";
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</h3>
      </div> 
     <p>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["contenu"]) ? $context["contenu"] : $this->getContext($context, "contenu")), "html", null, true);
            echo " </br>
       </br>
       Ajoutée le ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
            echo "</p>

       <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fsp_affichercom");
            echo "\" alt=\"affichercom\"><button class=\"affichercom\" >Afficher les commentaires</button></a>
       <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fsp_ajoutercom");
            echo "\"  alt=\"ajoutercom\"><button class=\"ajoutercom\">Ajouter un commentaire</button></a>
   </div>
  </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bf598858bc5e5a604966a148c8d06ef8b65a49dadff10b8605f05c749f64c9d9->leave($__internal_bf598858bc5e5a604966a148c8d06ef8b65a49dadff10b8605f05c749f64c9d9_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:afficherannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  84 => 18,  75 => 16,  70 => 14,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*     {% for uneAnnonce in lesAnnonces %}*/
/*       {% set titre = uneAnnonce.titre %}*/
/*       {% set contenu = uneAnnonce.contenu %}*/
/*       {% set date = uneAnnonce.date %}*/
/*       {% set prenom = uneAnnonce.prenom %}*/
/*       {% set nom = uneAnnonce.nom %}*/
/*        <h3>{{titre}}</h3>*/
/*       </div> */
/*      <p>{{contenu}} </br>*/
/*        </br>*/
/*        Ajoutée le {{date}} par {{prenom}} {{nom}}</p>*/
/* */
/*        <a href="{{path('fsp_affichercom')}}" alt="affichercom"><button class="affichercom" >Afficher les commentaires</button></a>*/
/*        <a href="{{path('fsp_ajoutercom')}}"  alt="ajoutercom"><button class="ajoutercom">Ajouter un commentaire</button></a>*/
/*    </div>*/
/*   </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
