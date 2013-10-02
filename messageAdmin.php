<h2>Bienvenue Sur Votre Panel Administrateur<H2><br>
<TABLE BORDER="1"> 
  <TR> 
 <TH> Login </TH> 
 <TH> message </TH> 
 <TH> suprimer </TH> 
  </TR> 
  <TR> 
 <form method="post" action="supprimer.php">
 <?php 
	include("connexionBDD.php");
	$requete="select * FROM message";
	$res = mysql_query($requete);
	echo "<tr>";
	while ($lecture = mysql_fetch_assoc($res)) 
			{	echo "<td>".$lecture["pseudo"]."</td>";
				echo "<td>".$lecture["message"]."</td>";
				echo "<td>"."<input type='checkbox' name='idMessage' value=".$lecture["idMessage"].">"."</td>";
			echo "</tr>";
			}
	?> 
  </TR>
  <input type='submit' value='supprimer'>
</form>  
</TABLE> 
</html>
