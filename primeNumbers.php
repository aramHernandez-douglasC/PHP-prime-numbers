<?php

class PrimeNumbers {
    public $numbers = [];
    
    
    function searchPrime(int $n = 1000) {
        $num = [];
        $num[1] = 0;
        for ($i = 1; $i < $n; $i++) {
            $num[$i] = 1;
        }
        for ($j = 2; $j <= sqrt($n); $j++) {
            if ($num[$j] == 1) {
                for ($x = $j; $x * $j <= $n; $x++) {
                    $num[$x * $j] = 0;
                }
            }
        }


        foreach ($num as $key => $value) {
            if ($value == 0) {
                continue;
            }
            echo $key . "\n";
           
        }
    }

}
