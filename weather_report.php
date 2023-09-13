<?php


$temperature = 25;

if($temperature<=0){
	echo "It's freezing!";
}else if($temperature>0 && $temperature<=20){
	echo "It's cool.";
}else if($temperature>20 && $temperature<40){
	echo "It's warm";
}else{
	echo "It's very hot.";
}


?>