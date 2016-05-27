<?php

/* FSPBundle:User:supprimer.html.twig */
class __TwigTemplate_38e0d5935f5391f3a81335046a070adaa40e841648a20221d238df25a78ffcb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:supprimer.html.twig", 1);
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
        $__internal_229dad7a3d01caf2a4e4185609079f672d247c068f3e359cc8c9d68751e7de55 = $this->env->getExtension("native_profiler");
        $__internal_229dad7a3d01caf2a4e4185609079f672d247c068f3e359cc8c9d68751e7de55->enter($__internal_229dad7a3d01caf2a4e4185609079f672d247c068f3e359cc8c9d68751e7de55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229dad7a3d01caf2a4e4185609079f672d247c068f3e359cc8c9d68751e7de55->leave($__internal_229dad7a3d01caf2a4e4185609079f672d247c068f3e359cc8c9d68751e7de55_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_416d9a6af91fa8e41bd0363768cd4b90a481e0caf8d0eb42e7ae14d57f8752a4 = $this->env->getExtension("native_profiler");
        $__internal_416d9a6af91fa8e41bd0363768cd4b90a481e0caf8d0eb42e7ae14d57f8752a4->enter($__internal_416d9a6af91fa8e41bd0363768cd4b90a481e0caf8d0eb42e7ae14d57f8752a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <h3>Supprimer une annonce</h3>
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
            echo "        ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 12
            echo "        ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 13
            echo "        ";
            $context["image"] = $this->getAttribute($context["uneAnnonce"], "image", array());
            // line 14
            echo "        ";
            $context["idannonce"] = $this->getAttribute($context["uneAnnonce"], "id", array());
            // line 15
            echo "
       <tr>
           <td class=\"theme\"><img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["imageTheme"]) ? $context["imageTheme"] : $this->getContext($context, "imageTheme")), "html", null, true);
            echo "\" id=\"theme\"></img></td>
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
           <td class=\"statut\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
           <td class=\"supprimer\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsp_supprimerannonce", array("id" => $this->getAttribute($context["uneAnnonce"], "id", array()))), "html", null, true);
            echo "\" alt=\"supprimerannonce\"><button      onclick=\"return confirm('Voulez-vous vraiment supprimer cette annonce?');\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/poubelle.png"), "html", null, true);
            echo "\" id=\"supprimer\"</img></button></a></td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "     </table>
   </div>
  </div>
";
        
        $__internal_416d9a6af91fa8e41bd0363768cd4b90a481e0caf8d0eb42e7ae14d57f8752a4->leave($__internal_416d9a6af91fa8e41bd0363768cd4b90a481e0caf8d0eb42e7ae14d57f8752a4_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  91 => 21,  86 => 20,  82 => 19,  76 => 18,  71 => 17,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*      <h3>Supprimer une annonce</h3>*/
/*     </div>*/
/*      <table class ="listeAnnonce">*/
/*        {% for uneAnnonce in lesAnnonces %}*/
/*         {% set imageTheme = uneAnnonce.imageTheme %}*/
/*         {% set titre      = uneAnnonce.titre %}*/
/*         {% set date       = uneAnnonce.date %}*/
/*         {% set image      = uneAnnonce.image %}*/
/*         {% set idannonce  = uneAnnonce.id %}*/
/* */
/*        <tr>*/
/*            <td class="theme"><img src="{{asset('bundles/fsp/images/')}}{{imageTheme}}" id="theme"></img></td>*/
/*            <td class="titre"><a href="{{path('fsp_afficherannonce',{'id':uneAnnonce.id})}}" class="titreclick" alt="titreannonce">{{titre}}</a></td>*/
/*            <td class="date">Le {{date}}</td>*/
/*            <td class="statut"><img src="{{asset('bundles/fsp/images/')}}{{image}}" id="statut"></img></td>*/
/*            <td class="supprimer"><a href="{{path('fsp_supprimerannonce',{'id':uneAnnonce.id})}}" alt="supprimerannonce"><button      onclick="return confirm('Voulez-vous vraiment supprimer cette annonce?');"><img src="{{asset('bundles/fsp/images/poubelle.png')}}" id="supprimer"</img></button></a></td>*/
/*        </tr>*/
/*        {% endfor %}*/
/*      </table>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
