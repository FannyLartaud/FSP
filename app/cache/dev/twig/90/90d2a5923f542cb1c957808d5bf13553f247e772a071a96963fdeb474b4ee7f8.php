<?php

/* FSPBundle:User:compte.html.twig */
class __TwigTemplate_66e772bca1581a2be0ef5d33ae1e7273ddb21750739f8d1b51cb9bf050a03fc8 extends Twig_Template
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
        $__internal_777ea6746e77b61e1bb904fe4b663b64dac548e67abc0cd6243fbf4d0d212875 = $this->env->getExtension("native_profiler");
        $__internal_777ea6746e77b61e1bb904fe4b663b64dac548e67abc0cd6243fbf4d0d212875->enter($__internal_777ea6746e77b61e1bb904fe4b663b64dac548e67abc0cd6243fbf4d0d212875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:compte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777ea6746e77b61e1bb904fe4b663b64dac548e67abc0cd6243fbf4d0d212875->leave($__internal_777ea6746e77b61e1bb904fe4b663b64dac548e67abc0cd6243fbf4d0d212875_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_05c4fdcad7205b2a4da9dfef1360b634bb54f18c579078f4f7f3d25c08de7e44 = $this->env->getExtension("native_profiler");
        $__internal_05c4fdcad7205b2a4da9dfef1360b634bb54f18c579078f4f7f3d25c08de7e44->enter($__internal_05c4fdcad7205b2a4da9dfef1360b634bb54f18c579078f4f7f3d25c08de7e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
            echo "       <tr>
           <td class=\"theme\"><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["imageTheme"]) ? $context["imageTheme"] : $this->getContext($context, "imageTheme")), "html", null, true);
            echo "\" id=\"theme\"></img></td>
\t       <td class=\"titre\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsp_afficherannonce", array("id" => $this->getAttribute($context["uneAnnonce"], "id", array()))), "html", null, true);
            echo "\" class=\"titreclick\" alt=\"titreannonce\">";
            echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
            echo "</a></td>
           <td class=\"date\">Le ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo "</td>
           <td class=\"statut\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" id=\"statut\"></img></td>
       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "     </table>
   </div>
  </div>
";
        
        $__internal_05c4fdcad7205b2a4da9dfef1360b634bb54f18c579078f4f7f3d25c08de7e44->leave($__internal_05c4fdcad7205b2a4da9dfef1360b634bb54f18c579078f4f7f3d25c08de7e44_prof);

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
        return array (  102 => 25,  92 => 22,  88 => 21,  82 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  58 => 13,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
