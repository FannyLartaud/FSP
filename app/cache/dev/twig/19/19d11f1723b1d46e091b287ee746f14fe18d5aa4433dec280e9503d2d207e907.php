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
        $__internal_0a4588785c91db4ccdc0d93e4cdca39a3c8e3da46cc0fdb02f857708577bf9b5 = $this->env->getExtension("native_profiler");
        $__internal_0a4588785c91db4ccdc0d93e4cdca39a3c8e3da46cc0fdb02f857708577bf9b5->enter($__internal_0a4588785c91db4ccdc0d93e4cdca39a3c8e3da46cc0fdb02f857708577bf9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:afficherannonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4588785c91db4ccdc0d93e4cdca39a3c8e3da46cc0fdb02f857708577bf9b5->leave($__internal_0a4588785c91db4ccdc0d93e4cdca39a3c8e3da46cc0fdb02f857708577bf9b5_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_93f611ed0d26f34a85bfd03037c9aa4f164e217e41f146c552e689550d4da2f7 = $this->env->getExtension("native_profiler");
        $__internal_93f611ed0d26f34a85bfd03037c9aa4f164e217e41f146c552e689550d4da2f7->enter($__internal_93f611ed0d26f34a85bfd03037c9aa4f164e217e41f146c552e689550d4da2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
            echo "     ";
            $context["titre"] = $this->getAttribute($context["uneAnnonce"], "titre", array());
            // line 8
            echo "     ";
            $context["contenu"] = $this->getAttribute($context["uneAnnonce"], "contenu", array());
            // line 9
            echo "     ";
            $context["date"] = $this->getAttribute($context["uneAnnonce"], "date", array());
            // line 10
            echo "     ";
            $context["prenom"] = $this->getAttribute($context["uneAnnonce"], "prenom", array());
            // line 11
            echo "     ";
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
   </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneAnnonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_93f611ed0d26f34a85bfd03037c9aa4f164e217e41f146c552e689550d4da2f7->leave($__internal_93f611ed0d26f34a85bfd03037c9aa4f164e217e41f146c552e689550d4da2f7_prof);

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
        return array (  75 => 16,  70 => 14,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*    {% for uneAnnonce in lesAnnonces %}*/
/*      {% set titre = uneAnnonce.titre %}*/
/*      {% set contenu = uneAnnonce.contenu %}*/
/*      {% set date = uneAnnonce.date %}*/
/*      {% set prenom = uneAnnonce.prenom %}*/
/*      {% set nom = uneAnnonce.nom %}*/
/*        <h3>{{titre}}</h3>*/
/*       </div> */
/*      <p>{{contenu}} </br>*/
/*        </br>*/
/*        Ajoutée le {{date}} par {{prenom}} {{nom}}</p>*/
/*    </div>*/
/*   </div>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
