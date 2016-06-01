<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/accueil')) {
                // fsp_accueil
                if ($pathinfo === '/accueil') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\HomeController::accueilAction',  '_route' => 'fsp_accueil',);
                }

                // fsp_accueil_connecte
                if ($pathinfo === '/accueil-connecte') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::accueilConnecteAction',  '_route' => 'fsp_accueil_connecte',);
                }

            }

            if (0 === strpos($pathinfo, '/annonces-')) {
                // fsp_logement
                if ($pathinfo === '/annonces-logement') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::logementAction',  '_route' => 'fsp_logement',);
                }

                // fsp_cours
                if ($pathinfo === '/annonces-cours') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::coursAction',  '_route' => 'fsp_cours',);
                }

                // fsp_evenement
                if ($pathinfo === '/annonces-evenements') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::evenementAction',  '_route' => 'fsp_evenement',);
                }

                // fsp_culture
                if ($pathinfo === '/annonces-culture') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::cultureAction',  '_route' => 'fsp_culture',);
                }

                // fsp_plan
                if ($pathinfo === '/annonces-plan') {
                    return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\ThemeController::planAction',  '_route' => 'fsp_plan',);
                }

            }

        }

        // fsp_connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::connexionAction',  '_route' => 'fsp_connexion',);
        }

        // fsp_valider_connection
        if ($pathinfo === '/valider-connection') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validerconnectionAction',  '_route' => 'fsp_valider_connection',);
        }

        // fsp_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::deconnexionAction',  '_route' => 'fsp_deconnexion',);
        }

        // fsp_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::inscriptionAction',  '_route' => 'fsp_inscription',);
        }

        // fsp_validerinscription
        if ($pathinfo === '/validerinscription') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validerinscriptionAction',  '_route' => 'fsp_validerinscription',);
        }

        // fsp_compte
        if ($pathinfo === '/mon-compte') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::compteAction',  '_route' => 'fsp_compte',);
        }

        // fsp_ajouter
        if ($pathinfo === '/ajouter-annonce') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::ajouterAnnonceAction',  '_route' => 'fsp_ajouter',);
        }

        // fsp_validerajouter
        if ($pathinfo === '/validerajouter') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validerajouterAction',  '_route' => 'fsp_validerajouter',);
        }

        if (0 === strpos($pathinfo, '/m')) {
            // fsp_modifier
            if ($pathinfo === '/modifier-annonce') {
                return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::modifierAction',  '_route' => 'fsp_modifier',);
            }

            // fsp_mesannonces
            if ($pathinfo === '/mesannonces') {
                return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::mesannoncesAction',  '_route' => 'fsp_mesannonces',);
            }

        }

        // fsp_afficherannonce
        if (0 === strpos($pathinfo, '/afficherannonce') && preg_match('#^/afficherannonce/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fsp_afficherannonce;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsp_afficherannonce')), array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::afficherannonceAction',));
        }
        not_fsp_afficherannonce:

        // fsp_modifierannonce
        if (0 === strpos($pathinfo, '/modifierannonce') && preg_match('#^/modifierannonce/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsp_modifierannonce')), array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::modifierAnnonceAction',));
        }

        // fsp_validermodifier
        if (0 === strpos($pathinfo, '/validermodifier') && preg_match('#^/validermodifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsp_validermodifier')), array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validermodifierAction',));
        }

        if (0 === strpos($pathinfo, '/supprimer-annonce')) {
            // fsp_supprimerannonce
            if (preg_match('#^/supprimer\\-annonce/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsp_supprimerannonce')), array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::supprimerAnnonceAction',));
            }

            // fsp_supprimer
            if ($pathinfo === '/supprimer-annonce') {
                return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::supprimerAction',  '_route' => 'fsp_supprimer',);
            }

        }

        // fsp_validersuppression
        if (0 === strpos($pathinfo, '/validersuppression') && preg_match('#^/validersuppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fsp_validersuppression')), array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validersuppressionAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // fsp_affichercom
            if ($pathinfo === '/afficher-com') {
                return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::affichercomAction',  '_route' => 'fsp_affichercom',);
            }

            // fsp_ajoutercom
            if ($pathinfo === '/ajouter-com') {
                return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::ajoutercomAction',  '_route' => 'fsp_ajoutercom',);
            }

        }

        // fsp_validercommentaire
        if ($pathinfo === '/valider-ajout-com') {
            return array (  '_controller' => 'IRAM\\FSPBundle\\Controller\\UserController::validercommentaireAction',  '_route' => 'fsp_validercommentaire',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
