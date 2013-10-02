<?php
session_start();
$pseudo = $_POST["pseudo"];
$mdp = $_POST["mdp"];
include("connexionBDD.php");
$requete="INSERT INTO `utilisateur` (`pseudo`, `password`) VALUES ('$pseudo', '$mdp')";
//echo $requete;
$res = mysql_query($requete);
if($res)
{
		echo "inscription ok";
}
else
	echo "erreur";
?>
