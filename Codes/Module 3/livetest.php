<?php

function isTrue($numbers,$targetsum){

    for($i=0;$i<sizeof($numbers);$i++){
        for($j=0;$j<sizeof($numbers);$j++){
            if($i==$j){
                continue;
            }
            if ($numbers[$i] + $numbers[$j] == $targetsum){
                return True;    
            }

        }
    }
    return FALSE;

}


echo isTrue([0,1,2,3,4],8)? "True":"False";