<?php 
echo '<br>';
echo '<span style="color:c0c0c0; font-size:19px;">Click counter</span><br><br>';
session_start()?>
<form method="post" action="brojacClick2_obrada.php">
<input type="submit" name="next" value="Next"/>
<input type="submit" name="clear" value="Clear"/>
</form>

<?php 
	$ispisClick = $_SESSION['cnt'];
	echo $ispisClick;
?>