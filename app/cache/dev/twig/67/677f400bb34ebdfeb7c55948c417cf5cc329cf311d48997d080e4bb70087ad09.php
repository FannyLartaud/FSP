<?php

/* FSPBundle:User:connexion.html.twig */
class __TwigTemplate_8eac701bb58fc39c6d9b6c236038cc3ae33907bd076279e78c408d7aaad5ea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::accueil.html.twig", "FSPBundle:User:connexion.html.twig", 1);
        $this->blocks = array(
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b57a11fa0f78577603b56bec6b3d8529964ad7a6e3cc6a1a0d2696ee9d470e13 = $this->env->getExtension("native_profiler");
        $__internal_b57a11fa0f78577603b56bec6b3d8529964ad7a6e3cc6a1a0d2696ee9d470e13->enter($__internal_b57a11fa0f78577603b56bec6b3d8529964ad7a6e3cc6a1a0d2696ee9d470e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b57a11fa0f78577603b56bec6b3d8529964ad7a6e3cc6a1a0d2696ee9d470e13->leave($__internal_b57a11fa0f78577603b56bec6b3d8529964ad7a6e3cc6a1a0d2696ee9d470e13_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_beaba379d7eee5e08b781fd2362f1ff31160ecefaa81e463b4ec91896fdd4212 = $this->env->getExtension("native_profiler");
        $__internal_beaba379d7eee5e08b781fd2362f1ff31160ecefaa81e463b4ec91896fdd4212->enter($__internal_beaba379d7eee5e08b781fd2362f1ff31160ecefaa81e463b4ec91896fdd4212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
    <div id=\"gererConnexion\">
     <h3>Connexion</h3>
    </div>
    ";
        // line 8
        if (array_key_exists("message", $context)) {
            // line 9
            echo "      <div class=\"erreur\">
         <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/erreur.png"), "html", null, true);
            echo "\" class=\"erreurLogo\"></img>
       <ul>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul>
      </div>
    ";
        }
        // line 13
        echo "\t
    <form method=\"POST\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fsp_valider_connection");
        echo "\" class=\"formConnexion\">
     <div class=\"connexion\">
          <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"E-mail *\"/>
          <input id=\"info\" type=\"password\" name=\"mdp\" placeholder=\"Mot de passe *\"/>
          <input id=\"valider\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
          <input id=\"annuler\" type=\"reset\" value=\"Annuler\" name\"annuler\"/>
     </div>
    </form>
   </div>
  </div>
";
        
        $__internal_beaba379d7eee5e08b781fd2362f1ff31160ecefaa81e463b4ec91896fdd4212->leave($__internal_beaba379d7eee5e08b781fd2362f1ff31160ecefaa81e463b4ec91896fdd4212_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  56 => 11,  52 => 10,  49 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*     <div id="gererConnexion">*/
/*      <h3>Connexion</h3>*/
/*     </div>*/
/*     {% if(message is defined)%}*/
/*       <div class="erreur">*/
/*          <img src="{{asset('bundles/fsp/images/erreur.png')}}" class="erreurLogo"></img>*/
/*        <ul>{{message}}</ul>*/
/*       </div>*/
/*     {% endif %}	*/
/*     <form method="POST" action="{{path('fsp_valider_connection')}}" class="formConnexion">*/
/*      <div class="connexion">*/
/*           <input id="email" type="text" name="email" placeholder="E-mail *"/>*/
/*           <input id="info" type="password" name="mdp" placeholder="Mot de passe *"/>*/
/*           <input id="valider" type="submit" value="Valider" name="valider"/>*/
/*           <input id="annuler" type="reset" value="Annuler" name"annuler"/>*/
/*      </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
