<?php 

function stockList($listOfArt, $listOfCat){  
  //initialisation de la variable rendu
  $render="";

  //test d'existance de liste à traiter
  if(count($listOfArt)==0 || count($listOfCat)==0) return $render;

  //Remplit un tableau avec une même valeur
  $r_val=array_fill(0,count($listOfCat),0);

  //Crée un tableau à partir de deux autres tableaux    
  $r= array_combine($listOfCat,$r_val);
  
  //Création de tableau de combinaison
  foreach($listOfArt as $item1){
     $infos=explode(" ",$item1);
     $cat=substr($infos[0],0,1);
     if(isset($r[$cat])) $r[$cat]=$r[$cat]+$infos[1] ;
  }
  
  //Traitement du tableau $r pour crétation du résultat à afficher
  foreach($r as $k => $v){      
      if($render!="") $render.=' - ';       
      $render.='('.$k.' : '.$v.')';      
  }

  //renvoi du résult de traitement
  return $render;
}



