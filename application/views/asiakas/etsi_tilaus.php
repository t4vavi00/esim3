<h1>Etsi tilaus</h1>
<form method="POST" action="etsi_tilaus">
<select name="valittu_id">
<?php
	foreach ($asiakkaat as $rivi) {

		echo '<option value="'.$rivi['id_asiakas'].'">'.
		$rivi['etunimi'].' '.
		$rivi['sukunimi'].'</option>';
	}
?>
</select>
<input type="submit" name="btnEtsi" value="Etsi">
</form>

<?php

	if (isset($tilaus)) {

		foreach ($tilaus as $rivi) {


			echo '<td>'.$rivi['tuote'].'</td><br>';

			
		}
	
		echo '<td>'.$rivi['sukunimi'].'</td>';
		echo '<td>'.$rivi['etunimi'].'</td>';
	
		
		//print_r($tilaus);
	}
?>