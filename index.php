
<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>

<h1>Äventyret</h1>

<?php
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>Vad heter du?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
elseif ($_GET['page'] == 1):
?>
<h2>Hej <? echo $_GET['player_name'] ?></h2>
<p>Du står i en skogsdunge. Till väster ser du en liten stuga med en rykande skorsten och österfrån rinner en liten flod. Norrut ser du bara träd.</p>
<form action="index.php">
	<label>Åt vilket håll går du?</label><br>
	<input type="radio" name="page" value="2" id="west">
	<label for="west">Väster</label><br>
	<input type="radio" name="page" value="3" id="north">
	<label for="north">Norr</label><br>
	<input type="radio" name="page" value="4" id="east">
	<label for="east">Öster</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 2):
?>
<h2>Stugan</h2>
<p>Det ser inte ut som att någon är hemma.</p>
<img src="img/hut.jpg">
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
endif
?>
