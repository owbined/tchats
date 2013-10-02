<?php
session_start();
if (!isset($_SESSION["speudo"]))
		header("location:accueil.php");
?>
<html>
<head>
<script src = "jquery-1.3.1.min.js"></script>
<script>
function insertMessage()
{
$.ajax({
		url : "insertMessage.php", 
		type : "POST", 
		data : "message=" +  document.getElementById("contenuMessage").value,
		success : function (data)
		{
					if (data != "messageok")
						alert("erreur,messagefail");
						else 
						document.getElementById("contenuMessage").value="";
		}
	});
}
function lectureMessage()
{
	$.ajax({
		url : "lectureMessage.php", 
		success : function (dataRecup)
		{
			if (dataRecup == "lecturefail")
						alert("erreur,lecturefail");
			else
			{
				document.getElementById("message").value = dataRecup;
			}
			
		}
	});
}	
window.setInterval('lectureMessage();' , 3000); 
</script>
</head>
<body onLoad="javascript:lectureMessage()">
<h1> Tchat </h1>
<form>
<textarea rows = "8" cols = "50" id = "message"> </textarea>
<textarea rows = "8" cols = "10" id = "connect" ></textarea>
<br>
<textarea rows = "1" cols = "64" id= "contenuMessage" ></textarea>
<input type="button" value="envoyer" onclick="javascript:insertMessage()"/>
</body>
</html>
