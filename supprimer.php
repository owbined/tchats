<?php 
include ('connexionBDD.php');
$idMessage[] = $_POST['idMessage'];
//echo "DELETE FROM message WHERE idMessage=".$idMessage[0];
//mysql_query("DELETE FROM message WHERE idMessage=".$idMessage[0]);
for ($i=0; $i<=$idMessage.length; $i++)
	mysql_query("DELETE FROM message WHERE idMessage=".$idMessage[$i]);
 header('Location: messageAdmin.php');
?>
