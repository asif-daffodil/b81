<?php
    $fistName = "Asif";
    $lastName = "Abir";
    function myName () {
        global $fistName, $lastName;
        return "My name is $fistName $lastName <br>";
    }
    function myFullName () {
        return "My name is ". $GLOBALS['fistName']." ".$GLOBALS["lastName"]."<br>";
    }
    // echo $fullName;
    echo myName().myFullName();

    //  $_SERVER
    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['HTTP_HOST']."<br>";
    // echo $_SERVER['HTTP_REFERER']."<br>";
    echo $_SERVER['HTTP_USER_AGENT']."<br>";
    echo $_SERVER['SCRIPT_NAME']."<br>";
    echo $_SERVER['SERVER_ADDR']."<br>";
    echo $_SERVER['SERVER_PORT']."<br>";
    echo $_SERVER['SERVER_SOFTWARE']."<br>";
    echo $_SERVER['REQUEST_METHOD']."<br>";

    // 

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
?>