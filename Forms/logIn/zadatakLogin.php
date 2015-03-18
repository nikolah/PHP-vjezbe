<?php

	// Zadatak: napraviti LogIn forme koje će zapisivati username i lozinku u datoteke, te propuštati na akciju ako se podudaraju
?>

<meta charset="UTF-8">
<br>
<span style="font-size:24; color:c0c0c0;">Register and log in with username and password</span>
<br><br>

<table>
	<tr>
		<td><span style="font-size:19; color:c0c0c0;">Register</span></td>
	</tr>
	<tr>
		<form method="POST" action="loginObrada2.php">
		<td>Username </td>
		<td><input type="text" name="userReg" maxlength="15"></input></td>
	</tr>
	<tr>
		<td>Password </td>
		<td><input type="password" name="passReg" maxlength="15"></input></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="register" value="  Submit  "></input></td>
		</form>
	</tr>
</table>
<br>
<table>
	<tr>
		<td><span style="font-size:19; color:c0c0c0;">Log in</span></td>
	</tr>
	<tr>
		<form method="POST" action="loginObrada2.php">
		<td>Username </td>
		<td><input type="text" name="userLog" maxlength="15"></input></td>
	</tr>
	<tr>
		<td>Password </td>
		<td><input type="password" name="passLog" maxlength="15"></input></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="login" value="  Submit  "></input></td>
		</form>
	</tr>
</table>
<br>
<?php
	session_start();
	
	if (isset($_SESSION['izjava'])) {
		$izjava = $_SESSION['izjava'];
		}
	else {
		$izjava = '<span style="color:c0c0c0;">"First load - empty"</span>'; // rezultat prvog unosa odnosno učitavanja
		}
	echo $izjava;
	$_SESSION['izjava'] = '<span style="color:c0c0c0;">Reloaded - empty</span>';

?>	