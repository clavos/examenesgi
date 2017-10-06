<?php
 function validate(){
	 echo "vous êtes connecté"
 }
?>

<html>
	<head>
		<title>Mon application PHP</title>
	</head>
	<body>
		<form method="POST">
			Login : <br>
			<input type="text"/><br>
			Mot de passe : <br>
			<input type="mdp"/><br>
			<button onClick="validate">Valider</button>
		</form>
	</body>
</html>