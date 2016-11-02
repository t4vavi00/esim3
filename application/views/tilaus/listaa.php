<h1>Tilaukset</h1>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH><TH>tuote</TH></TR>
<?php

	foreach ($tilaukset as $rivi) {

		echo'<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['tuote'].'</td></tr>';
	}

?>
</TABLE>