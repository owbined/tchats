<html>
<head>
<title> Ajax Tchat - Connexion </title>
<script src = "jquery-1.3.1.min.js"></script>
<script>
function test(){
	if (document.getElementById("motDePasse") && document.getElementById("pseudo") )
	{
		$.ajax({
			url : "verifSpeudoMdp.php", 
			type : "POST", 
			data : "pseudo=" + document.getElementById("pseudo").value +"&mdp=" + document.getElementById("motDePasse").value, 
			success : function (dataR) {
					if (dataR =="okadmin") {
						window.location.href="messageAdmin.php";}
					else if (dataR =="ok"){
						window.location.href="message.php";}
					else
						alert("erreur, veuillez retaper vos identifiants");
			}
		});
	}
}	

function inscription(){
	{
		$.ajax({
			url : "inscription.php", 
			type : "POST", 
			data : "pseudo=" + document.getElementById("pseudo").value +"&mdp=" + document.getElementById("motDePasse").value, 
			success : function (dataR) {
					if (dataR =="inscription ok")
						window.location.href="message.php";
					else
						alert("erreur, Votre inscription a echoué");
			}
		});
	}
}	
</script>
</head>
<body>

<h2> Ajax Tchat - Connexion </h2> </br>
<?php
	if (isset($_GET["erreur"]))
		echo "Identifiants de connexion incorrect, resaisir";
?>
<table>
<tr><td>pseudo : </td><td><input type = "text" id = "pseudo" /></td></tr>
<tr><td>Mot de passe : </td><td><input type ="text" id ="motDePasse" /></td></tr>
</table>
<input type ="submit" value = "Connexion" onclick="javascript:test()"/>

<input type ="submit" value = "inscription" onclick="javascript:inscription()"/>

</body>
</html>
