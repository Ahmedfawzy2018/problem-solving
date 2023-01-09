<?php

function isPerfectNumber($number)
{
	$sum = 0 ;

	for($i=1;$i < $number; $i++)
	{
		if($number % $i == 0)
			$sum += $i;
	}

	return $sum == $number ;
}

// Driver's code 
$N = 15; // 6 , 24 
  
if (isPerfectNumber($N)) 
    echo " Perfect Number"; 
else
    echo "Not  Perfect Number"; 

?>