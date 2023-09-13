


<form action="grade_calculator.php" method="post">
	<input type="number" name="sub1" placeholder="Enter marks of subject 1"><br><br>
	<input type="number" name="sub2" placeholder="Enter marks of subject 2"><br><br>
	<input type="number" name="sub3" placeholder="Enter marks of subject 3"><br><br>
	<input type="submit" name="submit" value="Calculate Grade">


</form>

<?php
$result=0;
if(isset($_POST['submit'])){
	$sub1 = $_POST['sub1'];
	$sub2 = $_POST['sub2'];
	$sub3 = $_POST['sub3'];

	$result = ($sub1+$sub2+$sub3)/3;
	if($result>=80){
		echo "A";
	}else if($result>=70){
		echo "B";
	}else if($result>=60){
		echo "C";
	}else if($result>=40){
		echo "D";
	}else{
		echo "F";
	}
	

}



?>