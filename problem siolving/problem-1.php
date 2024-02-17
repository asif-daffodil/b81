<?php
    class Solution {

        /**
         * @param Integer $x
         * @return Integer
         */
        function reverse($x) {
            $reverse = 0;
            $maxInt = pow(2, 31) - 1;
            $minInt = pow(-2, 31);
    
            while ($x != 0) {
                $pop = $x % 10;
                $x = (int)($x / 10);
    
                if ($reverse > $maxInt / 10 || ($reverse == $maxInt / 10 && $pop > 7)) {
                    return 0;
                }
                if ($reverse < $minInt / 10 || ($reverse == $minInt / 10 && $pop < -8)) {
                    return 0;
                }
    
                $reverse = $reverse * 10 + $pop;
            }
    
            return $reverse;
        }
    }
    
    
?>