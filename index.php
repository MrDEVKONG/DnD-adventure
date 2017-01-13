<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="main.css">
</head>

<div class="container">

<h1>Adventure</h1>


<?php
/** Kolla om query string parametern (GET parametern) är (==) tom (NULL)
 *  I fall att den är tom visas ett formulär som ber besökaren fylla i sitt namn
 */
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>Vad heter du?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
/** Annars om GET parametern "page" är lika med 1
 *  Visas den första 'sidan' med beskrivning av omgivningen och
 *  ett formulär för att komma vidare
 */
elseif ($_GET['page'] == 1):
?>
<h2>Cave entrence</h2>
<p>Du står vid öppningen till en stor gråtta och du är/inte ensam.</p>
<form action="index.php">
	<label>Vad gör du/ni?</label><br>
	<input type="radio" name="page" value="2" id="go_in">
	<label for="go_in">Gå in</label><br>
	<input type="radio" name="page" value="3" id="turn_back">
	<label for="turn_back">Vända om</label><br>
	<input type="radio" name="page" value="4" id="set_camp">
	<label for="set_camp">Slå läger</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 2):
?>
<h2>Cave inside</h2>
<p>Inne i grottan är det dunket och mörkt.<br></p>
<form action="index.php">
	<label>Åt vilket håll går du?</label><br>
	<input type="radio" name="page" value="5" id="west">
	<label for="west">Väster</label><br>
	<input type="radio" name="page" value="6" id="north">
	<label for="north">Norr</label><br>
	<input type="radio" name="page" value="7" id="east">
	<label for="east">Öster</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 4):
?>
<h2>Camp outside cave entrence</h2>
<p>Du/Ni slår läger utanför gråttan.<br> Det är en mycket händelselös kväll.<br><br>[Monolog/prat mellan spelarna om vad de sak göra.]<br><br>[EVENT]<br><br> När allt var över så var det dags att sova<br>Morgonen är kall och solen har just stiggit ovanför trädtopparna.<br></p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="2" id="go_in">
	<label for="go_in">Gå in</label><br>
	<input type="radio" name="page" value="6" id="turn_back">
	<label for="turn_back">Vända om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
<?php
/** Här tar elseif -satserna slut. Eftersom vi inte använder tecknen {} för att
 *	visa php var våra kodblock börjar och slutar behövs ett endif
 */
endif
/** stuff to have:
* <? echo $_GET['player_name'] ?>
*
*/
?>
</div>