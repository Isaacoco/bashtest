<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "gerer Utilisateur"
 * @package default
 * @todo  RAS
 */
 
$repInclude = './include/';
$repVues = './vues/';

require($repInclude . "_init.inc.php");

$uneref=lireDonneePost("utilisateur", "");

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2;
  supprimerUtilisateur($uneref, $tabErreurs);
  if (nbErreurs($tabErreurs)==0)
  {
    $reussite = 1;
    $messageActionOk = "L'utilisateur a bien été supprimée";
  }

}
    
  


// Construction de la page Ajouter
// pour l'affichage (appel des vues)
include($repVues."entete.php") ;
include($repVues."menu.php") ;
include($repVues ."erreur.php");
include($repVues."vgererUtilisateur.php") ;
include($repVues."pied.php") ; 
?>
  
