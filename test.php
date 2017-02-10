<?php 
	$b = ["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"];
 	$c = ["A", "B", "C", "D"];
    $res = "(A : 0) - (B : 1290) - (C : 515) - (D : 600)";
   	echo stockList($b, $c);
   	echo "<br>Compaire to : <br>".$res;
 ?>
