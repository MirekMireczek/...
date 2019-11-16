<?php

	session_start();
	
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
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
			
			<form action="zaloguj.php" method="post">
	
				Login: <br /> <input type="text" name="login" /> <br />
				Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" />
	
			
			</form>
		</div>
			<div class="title1"><i class="icon-laptop"></i> <br />	<a href="rejestracja.php"> Rejestracja - załóż darmowe konto </a>
	<br /> <br /></div>
			<div style="clear:both;"></div>

			
			<div class="title4"><i>Talk is cheap. Show me the code!</i> <br /> -Lunus Torvalds, twórca Linuxa</div>
		</div>
		
		<div class="square">
		<div class="title5">A tutaj część prezentacji, (chyba)</div>
		<div class="yt"><i class="icon-youtube-squared"></i></div>
		<div class="fb"><i class="icon-facebook-official"></i></div>
		<div class="gplus"><i class="icon-gplus"></i></div>
		<div class="tw"><i class="icon-twitter"></i></div>
		</div>
		<div style="clear:both;"></div>
		
		<div class="rectangle">2019 &copy; Konrad Grzyb. Programista webowy zaprasza do współpracy! konradinnegrzyb@gmal.com</div>
	
	</div>
<?php
	if(isset($_SESSION ['blad'])) echo $_SESSION['blad'];
?>

</body>
</html>