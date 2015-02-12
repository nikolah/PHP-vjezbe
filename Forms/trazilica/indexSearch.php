<meta charset="UTF-8">
<br>
<span style="font-size:22; color:c0c0c0;">Pravimo primitivnu tražilicu (Search engine)</span>
<?php	
	session_start();
?>
<br><br>
	<table>
		<tr>
			<td>Upiši riječ:</td>
			<form method="POST" action="obradaSearch.php">
			<td><input type="text" name="rijec1"></input></td>
			<td><input type="submit" value="   Potvrdi   "></input></td>
			</form>
		</tr>
		<tr>
			<td>Upiši slovo ili riječ pretrage:</td>
			<form method="POST" action="obradaSearch.php">
			<td><input type="text" name="rijec2"></input></td>
			<td><input type="submit" value="   Potvrdi   "></input></td>
			</form>
		</tr>
	</table>
<br>

