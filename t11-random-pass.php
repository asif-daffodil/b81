<?php  
    $password = substr(md5(time()), 0, 9);  
    echo $password."<br>";

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-F-d#H:i:s@A!l');
    $shuffle = strrev(str_shuffle($alphabet.$date.uniqid().rand(100000,999999)));
    echo substr($shuffle, 0, 9);
?>
<br>
<a href="./t11-random-pass.php"><button>Gelerate password</button></a>