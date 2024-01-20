<?php
    function myFunc ($x = 3, $y = 2) {
        if($x > $y){
            return "Hello world!<br>";
        }
        return "Hello Bangladesh!<br>";
    }

    echo myFunc(7, 6);
    echo myFunc();
    echo myFunc(1);
    echo myFunc(y: 1, x: 2);
?>