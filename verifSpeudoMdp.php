<?php
session_start();
$pseudo = $_POST["pseudo"];
$mdp = $_POST["mdp"];
include("connexionBDD.php");
$requete="select * FROM utilisateur where pseudo = '$pseudo' and password = '$mdp'";
//echo $requete;
$res = mysql_query($requete);
if($res)
{
	$ligne = mysql_fetch_assoc($res);
	if($_POST["pseudo"]=="admin")
		echo "okadmin";
	else if($ligne)
	{
		$_SESSION["speudo"] = $_POST["pseudo"];
		echo "ok";
		}
	else
		echo "erreur1";
}
else
	echo "erreur2";
?>
