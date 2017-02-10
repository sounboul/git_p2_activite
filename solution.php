<?php 

function stockList($listOfArt, $listOfCat){  
    $render="";
    if(count($listOfArt)==0 || count($listOfCat)==0) return $render;
    $r_val=array_fill(0,count($listOfCat),0);
    $r= array_combine($listOfCat,$r_val);  
    foreach($r as $k => $v){      
        if($render!="") $render.=' - ';       
        $render.='('.$k.' : '.$v.')';      
    }
    return $render;
}



