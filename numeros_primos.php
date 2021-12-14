<?php
    function primos($i, $f){
        $count = $i + 1;
        
        $nP = [];
        while($count < $f){
            $qtd = 0;
            for($c = 2; $c < $count; $c++){                
                if($count % $c == 0){
                    $qtd ++;
                }                
            }
            if($qtd == 0){
                array_push($nP, $count);
            }
            
            $count ++;
        }
        
        var_dump($nP);
    }
    
    $p = primos(10, 50);
?>
