<?php
    $arr = [12, 34, 56, 78, 90, 23, 45, 67, 89, 10];
    $arr2 = [34, 2, 13, 45, 67, 89, 10, 23, 45, 67, 89, 10];
    echo is_array($arr)."<br>";
    echo count($arr)."<br>";
    echo array_sum($arr)."<br>";
    echo array_product($arr)."<br>";
    sort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    rsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo in_array(12, $arr)."<br>";
    $newArr = array_merge($arr, $arr2);
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    // associative array
    $person = [
        "fname" => "Rahim",
        "lname" => "Mia",
        "age" => 25,
        "city" => "Dhaka",
        "country" => "Bangladesh"
    ];
    $allKeys = array_keys($person);
    echo "<pre>";
    print_r($allKeys);
    echo "</pre>";
    $allValues = array_values($person);
    echo "<pre>";
    print_r($allValues);
    echo "</pre>";
    echo array_key_exists("fname", $person)."<br>";
    array_pop($person);
    array_shift($person);
    array_unshift($person, "Mr.");
    array_push($person,  "Male");
    $person["profession"] = "Student";
    echo "<pre>";
    print_r($person);
    echo "</pre>";
    array_map(function($n){
        echo $n."<br>";
    }, $arr);

    $newUniqueArr = array_unique($newArr);
    echo "<pre>";
    print_r($newUniqueArr);
    echo "</pre>";
?>