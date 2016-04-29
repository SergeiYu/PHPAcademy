<?php
$a = 8;
$b = 0;
$operator = "/";
	switch($operator){
		case '+':
			echo $a + $b;
			break;
		case '-':
			echo $a - $b;
			break;
		case '*':
			echo $a * $b;
			break;
		case '/': if ($b!=0){
			echo $a/$b;
		} else{
			echo "Делить на 0 нельзя!";
			break;
               }
 	}
?>
		