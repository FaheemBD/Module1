<form action="" method="post">
	Enter number 1:<br>
	<input type="number" name="num1"><br>
	Enter number 2:<br>
	<input type="number" name="num2"><br><br>
	<select name="operation">
		<option name="+">select an operation</option>
		<option name="+">+</option>
		<option name="-">-</option>
		<option name="*">*</option>
		<option name="/">/</option>
	</select><br><br>
	<input type="submit" name="submit" value="Result">
</form>

<?php

function add($x,$y){
	return $x+$y;
}
function sub($x,$y){
	return $x-$y;
}
function mul($x,$y){
	return $x*$y;
}
function div($x,$y){
	return $x/$y;
}


if(isset($_POST['submit'])){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$op = $_POST['operation'];
	
	if($op=='add(+)'){
		echo add($num1,$num2);
	}else if($op=='-'){
		echo sub($num1,$num2);
	}else if($op=='*'){
		echo mul($num1,$num2);
	}else if($op=='/'){
		echo div($num1,$num2);
	}else{
		echo "please select an operation first";
	}
	
}

?>

