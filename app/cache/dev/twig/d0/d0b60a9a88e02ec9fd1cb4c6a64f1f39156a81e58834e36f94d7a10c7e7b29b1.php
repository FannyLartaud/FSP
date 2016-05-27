<?php

/* FSPBundle::accueil.html.twig */
class __TwigTemplate_82090e632a465ab82bf44fcae20f59bdc0aa8d2c3c05b9e8084558b89fdd89a3 extends Twig_Template
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
        $__internal_41b49518ae7f53aea51f24d893a6345873733d928d08c86c0382c841769cccb3 = $this->env->getExtension("native_profiler");
        $__internal_41b49518ae7f53aea51f24d893a6345873733d928d08c86c0382c841769cccb3->enter($__internal_41b49518ae7f53aea51f24d893a6345873733d928d08c86c0382c841769cccb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSPBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41b49518ae7f53aea51f24d893a6345873733d928d08c86c0382c841769cccb3->leave($__internal_41b49518ae7f53aea51f24d893a6345873733d928d08c86c0382c841769cccb3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_498589b118ecea015fede01ba412f5677254f9573240f0abcfc0af936b1f2b6c = $this->env->getExtension("native_profiler");
        $__internal_498589b118ecea015fede01ba412f5677254f9573240f0abcfc0af936b1f2b6c->enter($__internal_498589b118ecea015fede01ba412f5677254f9573240f0abcfc0af936b1f2b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('blocGauche', $context, $blocks);
        // line 15
        $this->displayBlock('blocCentre', $context, $blocks);
        
        $__internal_498589b118ecea015fede01ba412f5677254f9573240f0abcfc0af936b1f2b6c->leave($__internal_498589b118ecea015fede01ba412f5677254f9573240f0abcfc0af936b1f2b6c_prof);

    }

    // line 3
    public function block_blocGauche($context, array $blocks = array())
    {
        $__internal_4d02cc013c2ae40757d2a83f88bb50f37bf4c1a4dd7fbca52ba2ec5ff81ef60a = $this->env->getExtension("native_profiler");
        $__internal_4d02cc013c2ae40757d2a83f88bb50f37bf4c1a4dd7fbca52ba2ec5ff81ef60a->enter($__internal_4d02cc013c2ae40757d2a83f88bb50f37bf4c1a4dd7fbca52ba2ec5ff81ef60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocGauche"));

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
        
        $__internal_4d02cc013c2ae40757d2a83f88bb50f37bf4c1a4dd7fbca52ba2ec5ff81ef60a->leave($__internal_4d02cc013c2ae40757d2a83f88bb50f37bf4c1a4dd7fbca52ba2ec5ff81ef60a_prof);

    }

    // line 15
    public function block_blocCentre($context, array $blocks = array())
    {
        $__internal_d9008f0d582a35af1a51bbffad421ebecb3f580a1447b8dba61686e713eb8723 = $this->env->getExtension("native_profiler");
        $__internal_d9008f0d582a35af1a51bbffad421ebecb3f580a1447b8dba61686e713eb8723->enter($__internal_d9008f0d582a35af1a51bbffad421ebecb3f580a1447b8dba61686e713eb8723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blocCentre"));

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
        
        $__internal_d9008f0d582a35af1a51bbffad421ebecb3f580a1447b8dba61686e713eb8723->leave($__internal_d9008f0d582a35af1a51bbffad421ebecb3f580a1447b8dba61686e713eb8723_prof);

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
