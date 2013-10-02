<?php
session_start();
include("connexionBDD.php");
$requete="select * FROM message";
//echo $requete;
$res = mysql_query($requete);
$retour="";
while ($lecture = mysql_fetch_assoc($res)) 
			{	
			
			$retour = $retour.nl2br($lecture["pseudo"].">".$lecture["message"]."\n");
			$retour = str_replace('<br />', '', $retour);
				
}
echo $retour;
?>
