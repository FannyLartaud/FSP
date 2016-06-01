<?php

/* FSPBundle::accueil.html.twig */
class __TwigTemplate_e7c3c386980f1f00b5b7e3348b705e147db28d03030202c8f05129c74359b851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FSPBundle::layout.html.twig", "FSPBundle::accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'blocGauche' => array($this, 'block_blocGauche'),
            'blocCentre' => array($this, 'block_blocCentre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FSPBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_767278faba2483d2924b23c0695fbcb4dc153759627f4f1e331c66a0202c5265 = $this->env->getExtension("native_profiler");
        $__internal_767278faba2483d2924b23c0695fbcb4dc153759627f4f1e331c66a0202c5265->enter($__internal_767278faba2483d2924b23c0695fbcb4dc153759627f4f1e331c66a0202c5265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767278faba2483d2924b23c0695fbcb4dc153759627f4f1e331c66a0202c5265->leave($__internal_767278faba2483d2924b23c0695fbcb4dc153759627f4f1e331c66a0202c5265_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6edce88960dced384472ade00ebdfe092ee5241074ca262842736c927cfb141d = $this->env->getExtension("native_profiler");
        $__internal_6edce88960dced384472ade00ebdfe092ee5241074ca262842736c927cfb141d->enter($__internal_6edce88960dced384472ade00ebdfe092ee5241074ca262842736c927cfb141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 15
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_6edce88960dced384472ade00ebdfe092ee5241074ca262842736c927cfb141d->leave($__internal_6edce88960dced384472ade00ebdfe092ee5241074ca262842736c927cfb141d_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_50455f73ed46dfa6a2f93c0031919fcdbc89f46d5d98803428e24f3c312ee56a = $this->env->getExtension("native_profiler");
        $__internal_50455f73ed46dfa6a2f93c0031919fcdbc89f46d5d98803428e24f3c312ee56a->enter($__internal_50455f73ed46dfa6a2f93c0031919fcdbc89f46d5d98803428e24f3c312ee56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

        // line 4
        echo "  <div id=\"blocGauche\">
    <div><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fsp/images/user.png"), "html", null, true);
        echo "\" id=\"userAccueil\"</img></div>
    <div id=\"connexion\">
      <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fsp_connexion");
        echo "\" alt=\"Connexion\" title=\"Connexion\">Connexion</a>
    </div>
    <div id=\"barreV\"></div>
    <div id=\"inscription\">
      <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fsp_inscription");
        echo "\" alt=\"S'inscrire\" title=\"S'inscrire\">S'inscrire</a>
    </div>
  </div>
";
        
        $__internal_50455f73ed46dfa6a2f93c0031919fcdbc89f46d5d98803428e24f3c312ee56a->leave($__internal_50455f73ed46dfa6a2f93c0031919fcdbc89f46d5d98803428e24f3c312ee56a_prof);

    }

    // line 15
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_98aca90fc675f5188bf78ff8b362c35a0ec8cdd1d7bfeb7a42b2a40a92150ace = $this->env->getExtension("native_profiler");
        $__internal_98aca90fc675f5188bf78ff8b362c35a0ec8cdd1d7bfeb7a42b2a40a92150ace->enter($__internal_98aca90fc675f5188bf78ff8b362c35a0ec8cdd1d7bfeb7a42b2a40a92150ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

        // line 16
        echo "  <div id=\"blocCentreAccueil\">
   <div id=\"contenu\">
    <p class=\"presentation\">
       Bienvenue sur la site de la plateforme d'annonces pour étudiants étrangers arrivant en France.</br>
Pour accéder aux différents thèmes, il vous faut être connecté: grâce à cette inscription, vous pourrez être au courant des différents cours, évènements de la ville mais aussi des annonces pour les logements.</br>
Vous pourrez également contribuer à répondre à ses annonces par des commentaires.</br>
Alors, inscrivez-vous et bonne continuation sur le site !
    </p>
   </div>
  </div>
";
        
        $__internal_98aca90fc675f5188bf78ff8b362c35a0ec8cdd1d7bfeb7a42b2a40a92150ace->leave($__internal_98aca90fc675f5188bf78ff8b362c35a0ec8cdd1d7bfeb7a42b2a40a92150ace_prof);

    }

    public function getTemplateName()
    {
        return "FSPBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  83 => 15,  72 => 11,  65 => 7,  60 => 5,  57 => 4,  51 => 3,  44 => 15,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "FSPBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* {% block blocGauche %}*/
/*   <div id="blocGauche">*/
/*     <div><img src="{{asset('bundles/fsp/images/user.png')}}" id="userAccueil"</img></div>*/
/*     <div id="connexion">*/
/*       <a href="{{path('fsp_connexion')}}" alt="Connexion" title="Connexion">Connexion</a>*/
/*     </div>*/
/*     <div id="barreV"></div>*/
/*     <div id="inscription">*/
/*       <a href="{{path('fsp_inscription')}}" alt="S'inscrire" title="S'inscrire">S'inscrire</a>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% block blocCentre %}*/
/*   <div id="blocCentreAccueil">*/
/*    <div id="contenu">*/
/*     <p class="presentation">*/
/*        Bienvenue sur la site de la plateforme d'annonces pour étudiants étrangers arrivant en France.</br>*/
/* Pour accéder aux différents thèmes, il vous faut être connecté: grâce à cette inscription, vous pourrez être au courant des différents cours, évènements de la ville mais aussi des annonces pour les logements.</br>*/
/* Vous pourrez également contribuer à répondre à ses annonces par des commentaires.</br>*/
/* Alors, inscrivez-vous et bonne continuation sur le site !*/
/*     </p>*/
/*    </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
