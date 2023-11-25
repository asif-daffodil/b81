<?php  
    $age = 16;
    if($age <= 12){
        echo "You are a baby!";
    }elseif($age <= 19){
        echo "You are a teenager!";
    }elseif($age <= 29){
        echo "You are a young person!";
    }elseif($age <= 49){
        echo "You are a middle aged person!";
    }else{
        echo "You are too young!";
    }

    echo "<br>";

    // switch statement
    $age = 36;
    switch($age){
        case ($age <= 12):
            echo "You are a baby!";
            break;
        case ($age <= 19):
            echo "You are a teenager!";
            break;
        case ($age <= 29):
            echo "You are a young person!";
            break;
        case ($age <= 49):
            echo "You are a middle aged person!";
            break;
        default:
            echo "You are too young!";
    }

    echo "<br>";

    // switch statement
    $favcolor = "hotpink";
    switch($favcolor){
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }

    echo "<br>";

    // ternary operator
    $age = 36;
    echo ($age >= 18) ? "You are an adult!" : "You are not an adult!";

    echo "<br>";

    // null coalescing operator
    echo $personName?? "John Doe";

    if(isset($personName)){
        echo $personName;
    }else{
        echo "John Doe";
    }
?>