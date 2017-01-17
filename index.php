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

//Act 1

/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 2):
?>
<h2>Cave inside</h2>
<p>Inne i grottan är det dunket och mörkt.<br><br>[Monolog/prat mellan spelarna om vad de sak göra.]<br><br>[EVENT]<br><br>Längre ner i grottan är det fullt med stenar på golvet.<br><br>[SCRIPT EVENT]<br>"En spelare" faller omkull.<br>[Spelaren har chans att inte falla]</p>
	<form action="index.php">
		<label>Fyll i det som händer</label><br>
		<input type="radio" name="page" value="5" id="yes">
		<label for="yes">Ja</label><br>
		<input type="radio" name="page" value="6" id="no">
		<label for="no">Nej</label><br>
		<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
		<input type="submit" value="Skicka">
	</form>

<!-- "page 3" är längre ner -->

<?php
elseif ($_GET['page'] == 4):
?>
<h2>Camp outside cave entrence</h2>
<p>Du/Ni slår läger utanför gråttan.<br> Det är en mycket händelselös kväll.<br><br>[Monolog/prat mellan spelarna om vad de sak göra.]<br><br>[EVENT]<br><br> När allt var över så var det dags att sova<br>Morgonen är kall och solen har just stiggit ovanför trädtopparna.<br></p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="2" id="go_in">
	<label for="go_in">Gå in</label><br>
	<input type="radio" name="page" value="3" id="turn_back">
	<label for="turn_back">Vända om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 5):
?>
	<h2>Cave inside</h2>
		<p>"Ja!"<br><br>"Spelaren" faller ner på grotans golv och slår sig.<br><br>(Kasta d4 för skada)<br><br>Medans "spelaren" försöker komma på benen från att ha ramlat så ser han/hon att det ligger ben bland stenarna.<br><br>[Monolog/prat bland spelarna]<br><br></p>
	<form action="index.php">
		<label>Vad gör du/ni nu?</label><br>
		<input type="radio" name="page" value="7" id="go_on">
		<label for="go_on">Gå vidare</label><br>
		<input type="radio" name="page" value="9" id="turn_back">
		<label for="turn_back">Vända om</label><br>
		<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
		<input type="submit" value="Skicka">
	</form>

<?php
elseif ($_GET['page'] == 6):
?>
<h2>Cave inside</h2>
<p>"Nej!<br><br>"Spelren" lyckades återfå sin balans.<br><br>[Monolog/prat mellan spelarna]<br><br>Och så gick man vidare.<br></p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="7" id="go">
	<label for="go">Gå vidare</label><br>
	<input type="radio" name="page" value="9" id="turn_back">
	<label for="turn_back">Vänd om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 7):
?>
<h2>Cave hall</h2>
<p>Längre in i grottan så kommer ett stort rum.</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="8" id="go_in_hall">
	<label for="go_in_hall">Gå in</label><br>
	<input type="radio" name="page" value="10" id="look_around">
	<label for="turn_back">Titta runt</label><br>
	<input type="radio" name="page" value="9" id="turn_back">
	<label for="turn_back">Vänd om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 8):
?>
<h2>Cave hall</h2>
<p>[MONTER EVENT]</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="9" id="go_back">
	<label for="go_back">Gå tillbaka</label><br>
	<input type="radio" name="page" value="13" id="look_around">
	<label for="look_around">Titta runt</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<!-- "page 9" är längre ner -->

<?php
elseif ($_GET['page'] == 10):
?>
<h2>Cave hall</h2>
<p>Utanför det stora rummet stannar du/ni och tittar utifall att du/ni ser någonting.</p>
<form action="index.php">
	<label>Ser du/ni något?</label><br>
	<input type="radio" name="page" value="11" id="yes">
	<label for="yes">Ja</label><br>
	<input type="radio" name="page" value="12" id="no">
	<label for="no">Nej</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 11):
?>
<h2>Cave hall</h2>
<p>"Ja!"<br><br>En bit in i rummet ser ni några "insert monster" som sitter vid en liten eld.<br><br>[Monolog/prat om vad som ska göra nu.<br>[Om spelarna värljer att<strong>gå in</strong> så har den/de möjlighet att komma med en plan]</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="8" id="go_in">
	<label for="go_in">Gå in</label><br>
	<input type="radio" name="page" value="9" id="turn_back">
	<label for="turn_back">Vända om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 12):
?>
<h2>Cave hall</h2>
<p>"Nej!"<br><br>Du/Ni ser inget inne i rummet.</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="8" id="go_in_hall">
	<label for="go_in_hall">Gå in</label><br>
	<input type="radio" name="page" value="9" id="turn_back">
	<label for="turn_back">Vänd om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 13):
?>
<h2>Cave hall</h2>
<p>Du/Ni tittar runt i rummet och ser att vid enna väggen så finns det en dörr.<br>"En spelare" går fram till dörren.<br><br>[om spelaren väljer <strong>vänd om</strong> så kommar alla att lämna grotan]</p>
<form action="index.php">
	<label>Vad gör du nu?</label><br>
	<input type="radio" name="page" value="14" id="open">
	<label for="open">Öppna</label><br>
	<input type="radio" name="page" value="9" id="turn_back">
	<label for="turn_back">Vänd om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 14):
?>
<h2>Cave hall</h2>
<p>Inget händer när "spelaren" försöker öppna dören.<br><br>[Monolog/prat om vad som ska göras nu]</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="9" id="stop">
	<label for="stop">Ta en paus</label><br>
	<input type="radio" name="page" value="9" id="turn_back">
	<label for="turn_back">Vänd om</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
//När man kommer tillbaka ut oberoende
elseif ($_GET['page'] == 9):
?>
<h2>Camp outside cave entrence</h2>
<p>Du/Ni går ut ur grotan och kommer tillbacka till lägret.<br><br>[Monolog/prat mellan spelarna om vad som ska göras här sen (alernativ <strong>gå in igen</strong> eller <strong>gå därifrån</strong>)]<br>[Om allt är klart så kan du/ni bara välja att <strong>gå därifrån</strong> och ni är klara när GM säger det.]</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="2" id="go_in">
	<label for="go_in">Gå in igen</label><br>
	<input type="radio" name="page" value="3" id="turn_back">
	<label for="turn_back">Gå därifrån</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php

//Act 2 startar med page 3

elseif ($_GET['page'] == 3):
?>
<h2>Forest</h2>
<p>Du/Ni går ned för backen ni kom upp från för att komma till grottan.<br><br>[Monolog/prat mellan spelare]<br><br>När du/ni kommer ned fär backen befinner du/ni er i en skog påväg väster mot huvudstaden <i>Aldria</i><br><br>[End of Act 1]</p>
<form action="index.php">
	<label>Continue!</label><br>
	<input type="radio" name="page" value="15" id="next">
	<label for="next">Next</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 15):
?>
<h2>Forest</h2>
<p>I skogen är det tyst och lungt.<br>Den är mycket gammal men äldre finns det och den är fyllad av "insert monster"<br>Vilka attackerar de som vandrar.<br><br>[MONSTER EVENT]</p>
<form action="index.php">
	<label>Vad gör du/ni nu? (Efter att monstren är döda)</label><br>
	<input type="radio" name="page" value="16" id="fight">
	<label for="fight">Stanna och slåss</label><br>
	<input type="radio" name="page" value="17" id="flight">
	<label for="flight">Fly</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 16):
?>
<h2>Forest</h2>
<p>"Stanna och slåss!<br>[MONSTER EVENT]<br><br>Det kommer ännu fler!</p>
<form action="index.php">
	<label>Vad gör du/ni nu? (Efter att monstren är döda)</label><br>
	<input type="radio" name="page" value="18" id="fight">
	<label for="fight">Stanna och slåss</label><br>
	<input type="radio" name="page" value="19" id="flight">
	<label for="flight">Fly</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 17):
?>
<h2>Forest</h2>
<p>"FLY!"<br><br>Du/ni springer in i ännu en grupp!<br><br>[MONSTER EVENT]</p>
<form action="index.php">
	<label>Vad gör du/ni nu? (Efter att monstren är döda)</label><br>
	<input type="radio" name="page" value="16" id="fight">
	<label for="fight">Stanna och slåss</label><br>
	<input type="radio" name="page" value="17" id="flight">
	<label for="flight">Fly</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 18):
?>
<h2>Forest</h2>
<p>"Stana och slåss!"<br>[MONSTER EVENT]</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="16" id="fight">
	<label for="fight">Stanna och slåss</label><br>
	<input type="radio" name="page" value="17" id="flight">
	<label for="flight">Fly</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 19):
?>
<h2>Forest</h2>
<p>"Stana och slåss!"<br>[MONSTER EVENT]</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="16" id="fight">
	<label for="fight">Stanna och slåss</label><br>
	<input type="radio" name="page" value="17" id="flight">
	<label for="flight">Fly</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 18):
?>
<h2>Forest</h2>
<p>"Stana och slåss!"<br>[MONSTER EVENT]</p>
<form action="index.php">
	<label>Vad gör du/ni nu?</label><br>
	<input type="radio" name="page" value="16" id="fight">
	<label for="fight">Stanna och slåss</label><br>
	<input type="radio" name="page" value="17" id="flight">
	<label for="flight">Fly</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

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