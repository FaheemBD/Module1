


Enter Celsius Temperature:
<input type="number" id="celsius"><br><br>
<input type="submit" name="Convert1" onclick="convert1()" value="Convert Temperature">
	
<br><br><br><br>
Enter Fahrenheit Temperature:
<input type="number" id="fahrenheit"><br><br>
<input type="submit" name="Convert2" onclick="convert2()" value="Convert Temperature">


<script>
	function convert1(){
		let celsius = document.getElementById('celsius').value;
		let result = ((celsius*9)/5)+32;
		alert("Fahrenheit temperature is : "+result);
		
	}
	
	function convert2(){
		let fahrenheit = document.getElementById('fahrenheit').value;
		let result = ((fahrenheit-32)*5)/9;
		alert("Celsius temperature is : "+result);		
		
	}
	
</script>




