<?php  
    // Mathematical functions
    echo abs(-6.7)."<br>"; // 6.7
    echo ceil(6.1)."<br>"; // 7
    echo floor(6.7)."<br>"; // 6
    echo round(6.4)."<br>"; // 6
    echo is_int(6)."<br>"; // true
    echo is_integer(6)."<br>"; // true - alias of is_int()
    echo is_long(6)."<br>"; // true - alias of is_int()
    echo is_float(6.7)."<br>"; // true
    echo is_numeric("6")."<br>"; // true
    echo sqrt(36)."<br>"; // 8
    echo PHP_INT_MAX."<br>"; 
    echo PHP_INT_MIN."<br>";
    echo PHP_INT_SIZE."<br>";
    echo rand()."<br>";
    echo rand(1, 10)."<br>";
    echo uniqid()."<br>";
    echo max(1, 2, 3, 6, 5)."<br>";
    echo min(2, 4, 1, 6, 5)."<br>";
    echo pi()."<br>";
    echo pow(2, 3)."<br>";
    var_dump(is_nan(6));
?>