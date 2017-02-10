<?php 
	//inclure le fichier contenant la fonction
	include("solution.php");

	//Similer les tableaux $b (codelivre nbpag) et $c(catégories)
 	$b = ["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"];
 	$c = ["A", "B", "C", "D"];
    
    //Résultat attendu du test
    $res = "(A : 0) - (B : 1290) - (C : 515) - (D : 600)";

	//comparaison des deux résultats
   	echo stockList($b, $c);
   	echo "<br>Compaire to : <br>".$res

	//******fin test********/
 ?>
