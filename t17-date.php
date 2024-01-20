<?php
    date_default_timezone_set("Asia/Dhaka");
    echo date("d-F-Y H:i:s A l");

    echo "<br>";

    // mktime(hour, minute, second, month, day, year)
    $timestamp = mktime(10, 30, 15, 10, 9, 2030);
    echo date("F-d-Y l", $timestamp);

    echo "<br>";

    // strtotime()
    $timestamp = strtotime("tomorrow");
    echo date("F-d-Y l", $timestamp)."<br>";

    $timestamp = strtotime("next Monday");
    echo date("F-d-Y l", $timestamp)."<br>";

    $timestamp = strtotime("+3 Months");
    echo date("F-d-Y l", $timestamp)."<br>";

    // next 7 fridays
    $startDate = strtotime("next Friday");
    $endDate = strtotime("+6 Weeks", $startDate);
    while($startDate <= $endDate){
        echo date("F-d-Y l", $startDate)."<br>";
        $startDate = strtotime("+1 Week", $startDate);
    }
?>