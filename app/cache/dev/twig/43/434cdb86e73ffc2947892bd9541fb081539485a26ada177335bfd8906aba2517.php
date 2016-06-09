<?php

/* FSPBundle:User:ajoutercom.html.twig */
class __TwigTemplate_6176128bc01bb39bd88c61862f29f6e9028598ceabf7bc73ea7bd87bdfa71811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle:User:accueil.html.twig", "FSPBundle:User:ajoutercom.html.twig", 1);
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
        $__internal_9a7ab16ee3ecad41efd739622d86e34fb409912098dbb04c04c01586b25da200 = $this->env->getExtension("native_profiler");
        $__internal_9a7ab16ee3ecad41efd739622d86e34fb409912098dbb04c04c01586b25da200->enter($__internal_9a7ab16ee3ecad41efd739622d86e34fb409912098dbb04c04c01586b25da200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle:User:ajoutercom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a7ab16ee3ecad41efd739622d86e34fb409912098dbb04c04c01586b25da200->leave($__internal_9a7ab16ee3ecad41efd739622d86e34fb409912098dbb04c04c01586b25da200_prof);

    }

    // line 2
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_8afa7fec52079e1a86108c72a2177143db019a260f51e9ae8ce71ed18e446911 = $this->env->getExtension("native_profiler");
        $__internal_8afa7fec52079e1a86108c72a2177143db019a260f51e9ae8ce71ed18e446911->enter($__internal_8afa7fec52079e1a86108c72a2177143db019a260f51e9ae8ce71ed18e446911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 3
        echo "  <div id=\"blocCentre\">
   <div id=\"contenu\">
    <div id=\"gererAnnonces\">
     <h3>Ajouter un commentaire</h3>
    </div>
     <form method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fsp_validercommentaire");
        echo "\" class=\"formAjoutercom\">
       <label for=\"info\"> Contenu du commentaire: </label></br>
       <textarea name=\"contenu\" id=\"info\" rows=\"10\" cols=\"50\"  onfocus=\"if(this.value=='Votre commentaire ici.'){this.value='';}\" onblur=\"if(this.value==''){this.value='Votre commentaire ici.';}\">Votre commentaire ici.</textarea>
       <br/>
       <input id=\"validerIns\" type=\"submit\" value=\"Valider\" name=\"valider\"/>
       <input id=\"annulerIns\" type=\"reset\" value=\"Annuler\" name=\"annuler\"/>
      </div>
    </form>
   </div>
  </div>
";
        
        $__internal_8afa7fec52079e1a86108c72a2177143db019a260f51e9ae8ce71ed18e446911->leave($__internal_8afa7fec52079e1a86108c72a2177143db019a260f51e9ae8ce71ed18e446911_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle:User:ajoutercom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle:User:accueil.html.twig" %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentre">*/
/*    <div id="contenu">*/
/*     <div id="gererAnnonces">*/
/*      <h3>Ajouter un commentaire</h3>*/
/*     </div>*/
/*      <form method="POST" action="{{path('fsp_validercommentaire')}}" class="formAjoutercom">*/
/*        <label for="info"> Contenu du commentaire: </label></br>*/
/*        <textarea name="contenu" id="info" rows="10" cols="50"  onfocus="if(this.value=='Votre commentaire ici.'){this.value='';}" onblur="if(this.value==''){this.value='Votre commentaire ici.';}">Votre commentaire ici.</textarea>*/
/*        <br/>*/
/*        <input id="validerIns" type="submit" value="Valider" name="valider"/>*/
/*        <input id="annulerIns" type="reset" value="Annuler" name="annuler"/>*/
/*       </div>*/
/*     </form>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
