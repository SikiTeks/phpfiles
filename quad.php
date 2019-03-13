<?php
function quadeq($a, $b, $c){ 
	$x = -$b;
	$y = sqrt(($b * $b) - (4 * $a * $c));
	$z = 2 * $a;
	$p = ($x + $y)/ $z;
       return $p;
   }

   function quadeq2($a, $b, $c){ 
	$x = -$b;
	$y = sqrt(($b * $b) - (4 * $a * $c));
	$z = 2 * $a;
	$p = ($x - $y)/ $z;
       return $p;
   }

   
echo  quadeq(1,4,2);
echo "<br>";
echo quadeq2(1,4,2);


?>
