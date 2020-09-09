<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php 

	if (isset($_POST['nom']) AND !empty($_POST['nom'])) {

		echo '<h1>la page suivante</h1>';
		echo '<a href="./docs/page.php"></a>';


	} 
	 
	?>

<div >
	<h2>Inscrivez-vous ici</h2>
	<form method="post" action="index.php">
		<input type="text" name="nom" id="code" required placeholder="nom de l'école" autofocus><br>
		<input type="password" name="pass" id="pass" required placeholder="mot de passe" autofocus><br>
		<input type="submit" value="connexion" class="">
	</form>
	<h1>la page suivante</h1>
	<a href=""></a>
</div>

</body>
</html>