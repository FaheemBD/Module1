

<form action="even_odd_checker.php" method="post">
	<input type="number" name="number" placeholder="Enter a number"><br><br>
	<input type="submit" name="submit" value="check">
</form>
	
<?php

if(isset($_POST['submit'])){
	$number = $_POST['number'];
	
	if($number%2==0){
		echo "Even number";
	}else{
		echo "Odd number";
	}
	
}

?>
