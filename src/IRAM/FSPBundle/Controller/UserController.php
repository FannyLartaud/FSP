<?php

namespace IRAM\FSPBundle\Controller;
require_once("include/fct.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use PdoFsp;

class UserController extends Controller
{
 public function accueilConnecteAction()
 {
    $session = $this->get('request')->getSession();
    $request = $this->get('request');
    $pdo = $this->get('fsp.pdo');
    $lesAnnonces = $pdo->getAnnonces();
    return $this->render('FSPBundle:User:accueil.html.twig', array('lesAnnonces'=>$lesAnnonces));
 }

 public function connexionAction()
 {
  return $this->render('FSPBundle:User:connexion.html.twig');
 }

 public function validerconnectionAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $email = $request->request->get('email');
  $mdp = $request->request->get('mdp');
  $pdo = $this->get('fsp.pdo');
  $user = $pdo->getInfosUser($email,$mdp);
  if(!is_array($user)){
   return $this->render('FSPBundle:User:connexion.html.twig',array(
   'message'=>"Erreur d'email ou de mot de passe "));
  }
  else {
   $session->set('email',$user['email']);
   $session->set('nom',$user['nom']);
   $session->set('prenom',$user['prenom']);
   $session->set('dateNaissance',$user['dateNaissance']);
   $session->set('pays',$user['pays']);
   $lesAnnonces = $pdo->getAnnonces();        
   return $this->render('FSPBundle:User:accueil.html.twig',array('lesAnnonces'=>$lesAnnonces));
   }
 }  

 public function deconnexionAction()
 {
  $session = $this->get('request')->getSession();
  $session->clear();
  return $this->render('FSPBundle:User:connexion.html.twig');
 }

 public function inscriptionAction()
 {
  return $this->render('FSPBundle:User:inscription.html.twig');
 }

 public function modifierAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $email = $session->get('email');
  $lesAnnonces = $pdo->getAnnoncesUser($email);
  return $this->render('FSPBundle:User:modifier.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function supprimerAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $email = $session->get('email');
  $lesAnnonces = $pdo->getAnnoncesUser($email);
  return $this->render('FSPBundle:User:supprimer.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function compteAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $email = $session->get('email');
  $lesAnnonces = $pdo->getAnnoncesUser($email);
  return $this->render('FSPBundle:User:compte.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function validerinscriptionAction()
 {
  $session = $this->get('request')->getSession();
  $pdo = $this->get('fsp.pdo');
  $request = $this->get('request');
  $email = $request->request->get('email');
  $nom = $request->request->get('nom');
  $prenom = $request->request->get('prenom');
  $dateNaissance = $request->request->get('dateNaissance');
  $pays = $request->request->get('pays');
  $mdp = $request->request->get('mdp');
  $pdo->inscription($email,$nom,$prenom,$dateNaissance,$pays,$mdp);
  return $this->render('FSPBundle:User:connexion.html.twig');
 }

 public function validerajouterAction()
 {
 $session = $this->get('request')->getSession();
 $refemail = $session->get('email');
 $pdo = $this -> get('fsp.pdo');
 $request = $this->get('request');
 $id = $request->query->get('id');
 $titre = $request->request->get('titre');
 $date = $request->request->get('date');
 $refnomlangue = $request->request->get('langue');
 $refidtheme = $request->request->get('theme');
 $refidetat = '1';
 $contenu = $request->request->get('contenu');
 $pdo ->ajouterAnnonce($date,$titre,$contenu,$refnomlangue,$refemail,$refidtheme);
 $lesAnnonces = $pdo->getAnnoncesUser($refemail);
 return $this->render('FSPBundle:User:mesannonces.html.twig', array ('lesAnnonces'=>$lesAnnonces));

 }


 public function mesannoncesAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $email = $session->get('email');
  $lesAnnonces = $pdo->getAnnoncesUser($email);
  return $this->render('FSPBundle:User:mesannonces.html.twig',array('lesAnnonces'=>$lesAnnonces));
 }

 public function afficherannonceAction()
 {
  $session=$this->get('request')->getSession();
  $pdo = $this->get('fsp.pdo');
  $request = $this->get('request');
  $id = $request->request->get('id');
  $email = $session->get('email');
  $pdo->getAfficherAnnonce($id);
  $lesAnnonces = $pdo->getAnnonces();
  return $this->render ('FSPBundle:User:afficherannonce.html.twig', array('lesAnnonces'=>$lesAnnonces));
 }

 public function modifierAnnonceAction()
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $titre = $request->request->get('titre');
  $date = $request->request->get('date');
  $contenu = $request->request->get('contenu');
  $refemail = $session->get('email');
  $refnomlangue = $request->request->get('langue');
  $refidtheme = $request->request->get('theme');
  $refidetat = $request->request->get('etat');
  $lesAnnonces = $pdo->getAnnoncesUser($refemail);
  return $this->render('FSPBundle:User:modifierannonce.html.twig', array('lesAnnonces'=>$lesAnnonces));
 }

 public function validermodiferAction($id)
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $titre = $request->request->get('titre');
  $date = $request->request->get('date');
  $contenu = $request->request->get('contenu');
  $refemail = $session->get('email');
  $refnomlangue = $request->request->get('langue');
  $refidtheme = $request->request->get('theme');
  $refidetat = $request->request->get('etat');
  $pdo->modifierAnnonce($refemail);
  $lesAnnonces = $pdo->getAnnoncesUser($id);
  return $this->render('FSPBudnle:User:mesannonces.html.twig', array ('lesAnnonces'=>$lesAnnonces));
 }
  public function ajouterAnnonceAction()
  {

   return $this->render('FSPBundle:User:ajouter.html.twig');
  }


 public function supprimerAnnonceAction($id)
 {
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $id = $request->query->get('id');
  $pdo ->supprimerannonce($id);
  $email = $session->get('email');
  $lesAnnonces = $pdo->getAnnoncesUser($email);
  return $this->render('FSPBundle:User:supprimer.html.twig', array('lesAnnonces'=>$lesAnnonces));
 } 

public function affichercomAction()
{
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $id = $request->request->get('id');
  $lesCommentaires = $pdo->getCommentaireAnnonce($id);
  return $this->render('FSPBundle:User:affichercom.html.twig', array('lesCommentaires'=>$lesCommentaires));
}

public function ajoutercomAction()
{
 return $this->render('FSPBundle:User:ajoutercom.html.twig');
}

public function validercommentaireAction()
{
  $session = $this->get('request')->getSession();
  $request = $this->get('request');
  $pdo = $this->get('fsp.pdo');
  $refemail = $session->get('email');
  $id = $request->request->get('id');
  $contenu = $request->request->get('contenu');
  $date = $request->request->get('date');
  $pdo->ajoutCommentaire($date,$contenu,$refemail);
  $lesAnnonces = $pdo->getAnnonces();
  return $this->render('FSPBundle:User:afficherannonce.html.twig', array('lesAnnonces'=>$lesAnnonces));
}

}
