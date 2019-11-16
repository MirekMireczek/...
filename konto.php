<?php

	session_start();
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>TROLOLO</title>
	<meta name="description" content="Strona do przechwalek prezentacjami open source" />
	<meta name="keywords" content="prezentacje, PHP, OPEN SOURCE" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="stylesheet" href="css.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&display=swap" rel="stylesheet">
	
	<script src="timer.js"></script>
	
	</head>

<body onload="odliczanie();">
	
	<div id="container">
	
		<div class="rectangle">
			<div id="logo">Czyść Czyść</div>
			<div id="zegar"></div>
			<div style="clear:both;"></div>
		</div>
		
		<div class="square">
			<div class="title1"><i class="icon-user"></i><br />	
			<?php

				echo "<p>Witaj ".$_SESSION['user'].'![<a href="logout.php">Wyloguj się!</a>]</p>';	
				echo "<p><b>E-mail</b>:".$_SESSION['email'];

	
			?>

	
		</div>
			<div class="title1"> </a>
	<br /> <br /></div>
			<div style="clear:both;"></div>

			
			<div class="title4">Wyloguj się</div>
		</div>
		
		<div class="square">
		<div class="title5">A tutaj część prezentacji, (chyba)</div>

		

	
	</div>


</body>
</html>