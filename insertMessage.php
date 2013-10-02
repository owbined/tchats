<?php
session_start();
$date = date("d-m-Y");
$heure = date("H:i");
$heurDateCreation = $heure." ".$date;
$message = $_POST["message"];
$pseudo = $_SESSION["speudo"];
include("connexionBDD.php");
$requete="INSERT INTO `message` (`message`, `heurDateCreation`,`pseudo`) VALUES ('$message','$heurDateCreation','$pseudo')";
//echo $requete;
$res = mysql_query($requete);
if($res)
		echo "messageok";
else
	echo "messagefail";
?>
