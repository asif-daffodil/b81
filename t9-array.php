<?php 
    // $arr = array(1,2,3,4,5,6,7,8,9,10);
    $personNames = ["Rahim", "Karim", "Rafiq", "Jabbar", "Kamal", "Jamal", "Salam", "Rahima", "Karima", "Rafiza", "Jabbara", "Kamala", "Jamala", "Salama"];
    echo $personNames[0];
    echo "<br>";
    for ($i=0; $i < count($personNames); $i++) { 
        echo $personNames[$i]."<br>";
    }
    echo "<pre>";
    print_r($personNames);
    echo "</pre>";

    echo "<br>";

    foreach ($personNames as $k => $val) {
        echo $k." ".$val."<br>";
    }

    echo "<br>";

    // associative array
    $person = [
        "fname" => "Rahim",
        "lname" => "Mia",
        "age" => 25,
        "city" => "Dhaka",
        "country" => "Bangladesh"
    ];
    echo $person["fname"];
    echo "<pre>";
    print_r($person);
    echo "</pre>";
    foreach ($person as $key => $value) {
        echo ucfirst($key)." : ".$value."<br>";
    }

    echo "<br>";

    // multidimensional array
    $personsInfo = [
        ["Kuddus", 25, "Male", "Cumilla"],
        ["Boyati", 35, "Male", "Chittagong"],
        ["Hero", 25, "Male", "Bogura"],
        ["Alom", 50, "Male", "Joypurhat"],
        ["Sakibal Hasan", 40, "Male", "Magura"],
    ];

    echo $personsInfo[1][1];

    echo "<pre>";
    print_r($personsInfo);
    echo "</pre>";

    for ($i=0; $i < count($personsInfo); $i++) { 
        for ($j=0; $j < count($personsInfo[$i]); $j++) { 
            echo $personsInfo[$i][$j]." ";
        }
        echo "<br>";
    }

    echo "<br>";

    foreach ($personsInfo as $value) {
        foreach ($value as $val) {
            echo $val." ";
        }
        echo "<br>";
    }

    echo "<br>";
?>