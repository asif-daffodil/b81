<?php 
    $unit = 750;
    $bill = 0;
    if($unit <= 75){
        $bill = $unit * 4.85;
    }elseif($unit <= 200){
        $bill = 75 * 4.85 + ($unit - 75) * 6.63;
    }elseif($unit <= 300){
        $bill = 75 * 4.85 + 125 * 6.63 + ($unit - 200) * 6.95;
    }elseif($unit <= 400){
        $bill = 75 * 4.85 + 125 * 6.63 + 100 * 6.95 + ($unit - 300) * 7.34;
    }elseif($unit <= 600){
        $bill = 75 * 4.85 + 125 * 6.63 + 100 * 6.95 + 100 * 7.34 + ($unit - 400) * 11.51;
    }else{
        $bill = 75 * 4.85 + 125 * 6.63 + 100 * 6.95 + 100 * 7.34 + 200 * 11.51 + ($unit - 600) * 13.26;
    }
    echo $bill."<br>";

    // A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)

    $num1 = 20;
    $num2 = 5;
    $operator = "/";
    switch($operator){
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
        default:
            echo "Invalid operator!";
    }
?>

<?php  
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch($operator){
            case "+":
                echo $num1 + $num2;
                break;
            case "-":
                echo $num1 - $num2;
                break;
            case "*":
                echo $num1 * $num2;
                break;
            case "/":
                echo $num1 / $num2;
                break;
            default:
                echo "Invalid operator!";
        }
    }
?>

<form action="" method="post">
    <input type="number" placeholder="first number" name="num1">
    <input type="number" placeholder="Second number" name="num2">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="Calculate" name="submit">
</form>

<?php  
    // Check if a person is eligible to vote by age
    $age = 16;
    if($age >= 18){
        echo "You are eligible to vote!";
    }else{
        echo "You are not eligible to vote!";
    }

    echo "<br>";
    // Check if a person is eligible for marriage in BD by gender.
    $age = 18;
    $gender = "Male";
    if($gender === "Male"){
        if($age >= 21){
            echo "You are eligible for marriage!";
        }else{
            echo "You are not eligible for marriage!";
        }
    }else{
        if($age >= 18){
            echo "You are eligible for marriage!";
        }else{
            echo "You are not eligible for marriage!";
        }
    }

    echo "<br>";

    // Check if number is positive or negetive
    $num = -5;
    if($num > 0){
        echo "Positive";
    }elseif($num < 0){
        echo "Negetive";
    }else{
        echo "Zero";
    }

    echo "<br>";

    // Check if number is odd or even
    $num = 0;
    if($num % 2 === 0){
        echo "Even";
    }else{
        echo "Odd";
    }

    echo "<br>";

    // Check if data is integer or string
    $data = "Hadudu";
    if(is_int($data)){
        echo "Integer";
    }else{
        echo "String";
    }
?>