<?php
namespace IRAM\FSPBundle\services;
use PDO;

class PdoFsp{   
        private static $serveur='mysql:host=localhost';
        private static $bdd='dbname=FSP';
        private static $user='root';
        private static $mdp='root';		
		private static $monPdo;
		private static $monPdoFsp=null;
	
        public function __construct(){
    	PdoFsp::$monPdo = new PDO(PdoFsp::$serveur.';'.PdoFsp::$bdd, PdoFsp::$user, PdoFsp::$mdp); 
		PdoFsp::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoFsp::$monPdo = null;
	}
	
        public  static function getPdoFsp(){
		if(PdoFsp::$monPdoFsp==null){
			PdoFsp::$monPdoFsp= new PdoFsp();
		}
		return PdoFsp::$monPdoFsp;  
	}


	public function getInfosUser($email,$mdp){
		$req = "select profil.email as email, profil.nom as nom, profil.prenom as prenom, profil.dateNaissance as dateNaissance, profil.pays as pays from profil where profil.email='$email' and profil.mdp='$mdp'";
		$rs = PdoFsp::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
      
        public function getAnnonces(){
                $req = "select annonce.titre as titre, annonce.date as date, annonce.id as id, annonce.contenu as contenu,profil.nom as nom, profil.prenom as prenom, etat.libelle as etat, etat.image as image, theme.libelle as theme, theme.image as imageTheme from annonce, profil, etat, theme where annonce.refidetat = etat.id and annonce.refemail = profil.email and annonce.refidtheme = theme.id order by date desc";
                $rs = PdoFsp::$monPdo->query($req);
                $lesLignes = $rs->fetchAll();
           	$nbLignes = count($lesLignes);
		for ($i=0; $i<$nbLignes; $i++){
		  $date = $lesLignes[$i]['date'];
	          $lesLignes[$i]['date'] =  dateAnglaisVersFrancais($date);
		}
                return $lesLignes;  
        }

        public function getAnnoncesThemes($theme){
                  $req = "select annonce.titre as titre, annonce.date as date, annonce.id as id, annonce.contenu as contenu, profil.nom as nom, profil.prenom as prenom, etat.libelle as etat, etat.image as image, theme.libelle as theme from annonce, profil, etat, theme where annonce.refidetat = etat.id and annonce.refemail = profil.email and annonce.refidtheme = theme.id and theme.libelle = '$theme' order by date desc";
                $rs = PdoFsp::$monPdo->query($req);
                $lesLignes = $rs->fetchAll();
           	$nbLignes = count($lesLignes);
		for ($i=0; $i<$nbLignes; $i++){
		  $date = $lesLignes[$i]['date'];
		  $lesLignes[$i]['date'] =  dateAnglaisVersFrancais($date);
		}
                return $lesLignes;
        }

      	public function getAnnoncesUser($email){
		 $req = "select annonce.titre as titre, annonce.date as date, annonce.contenu as contenu,annonce.id as id, annonce.refnomlangue as langue, theme.libelle as theme, profil.prenom as prenom, profil.nom as nom, etat.libelle as etat, etat.image as image, theme.image as imageTheme from annonce, theme, profil, etat where annonce.refemail = profil.email and profil.email = '$email' and annonce.refidtheme = theme.id and annonce.refidetat = etat.id order by date desc";
		      $rs = PdoFsp::$monPdo->query($req);
		      $lesLignes = $rs->fetchAll();
           $nbLignes = count($lesLignes);
		for ($i=0; $i<$nbLignes; $i++){
		  $date = $lesLignes[$i]['date'];
		  $lesLignes[$i]['date'] =  dateAnglaisVersFrancais($date);
		}
		return $lesLignes;
	 }

	public function getCommentaireAnnonce($id){
		$req = "select commentaire.contenu as contenu, commentaire.date as date, profil.nom as nom, profil.prenom as prenom from commentaire, profil, annonce where commentaire.refemail = profil.email and commentaire.refidannonce = annonce.id and annonce.id = '$id' order by date desc";
		$rs = PdoFsp::$monPdo->query($req);
		$lesLignes = $rs->fetchAll();
		return $lesLignes;
	}

        public function inscription($email,$nom,$prenom,$dateNaissance,$pays,$mdp){
	$req = "insert into profil values('$email','$nom','$prenom','$dateNaissance','$pays','$mdp')";
var_dump ($req);
		PdoFsp::$monPdo->exec($req);
	}

        public function getajouterAnnonce(){
    $req = "select annonce.titre as titre, annonce.date as date, theme.libelle as theme, annonce.contenu as contenu from annonce, theme, profil, langue where annonce.refidtheme = theme.id and annonce.refemail = profil.email and annonce.refnomlangue = langue.nomlangue and annonce.refidetat = etat.id" ;
var_dump ($req);
        PdoFsp::$monPdo->query($req);
   }

	    public function ajouterAnnonce($date,$titre,$contenu,$refnomlangue,$refemail,$refidtheme){
	$req = "INSERT INTO `FSP`.`annonce` (`id`, `date`, `titre`, `contenu`, `refnomlangue`, `refemail`, `refidtheme`, `refidetat`) VALUES (NULL, '$date', '$titre', '$contenu', '$refnomlangue', '$refemail', '$refidtheme', '1') ";
var_dump ($req);
		PdoFsp::$monPdo->exec($req);
	}

	public function getAfficherAnnonce($id){
		$req = " select annonce.titre as titre, annonce.date as date,  annonce.contenu as contenu,profil.nom as nom, profil.prenom as prenom from annonce, profil where annonce.refemail = profil.email and annonce.id = '$id' " ;
var_dump ($req);
		$rs = PdoFsp::$monPdo->query($req);
        $lesLignes = $rs->fetchAll();
        return $lesLignes;
    }

   public function getModifierAnnonce(){
        $req ="update annonce.titre as titre, annonce.date as date, annonce.contenu as contenu, annonce.refnomlangue as langue, annonce.refemail as email, annonce.refidetat as etat, theme.libelle as theme from annonce,theme where annonce.refidtheme = theme.id";
       PdoFsp::$monPdo->query($req);
    }

  public function supprimerannonce($id){
       $req ="delete from annonce where annonce.id = '$id' ";
       PdoFsp::$monPdo->exec($req);
   }



}
?>	
