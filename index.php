<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Taïga</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.scrollTo-2.1.2/jquery.scrollTo.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>

	<div id="page">
		<header>
			<h1>Taiga</h1>

			<?php include("modules/menu.php") ?>
		</header>
		
		<aside>
			deconnexion
		</aside>

		<div id="sommaire">
			<h2>Sommaire</h2>
			<ul>
			</ul>
		</div>

		<main>
		<?php 

			if(!empty($_GET['page'])){

				switch($_GET['page']){

					case "accueil" :
						include("modules/accueil.php");
					break;

					case "liste" :
						include("modules/liste.php");
					break;

					case "formulaire" :
						include("modules/formulaire.php");
					break;

					default:
						include("modules/accueil.php");
					break;
				}
			}else{
				include("modules/accueil.php");
			}

		 ?>
		 </main>
	 </div>
	
</body>
</html>