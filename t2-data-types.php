<?php  
    // php data types
    // 1. String
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Array
    // 6. Object
    // 7. NULL
    // 8. Resource

    // 1. String
    $name = "Sima Sumaiya";
    var_dump($name);

    // 2. Integer
    $age = 20;
    var_dump($age);

    // 3. Float
    $cgpa = 3.50;
    var_dump($cgpa);

    // 4. Boolean
    $isMale = true;
    var_dump($isMale);

    // 5. Array
    $friends = ["Sima", "Sumaiya", "Sima Sumaiya"];

    // 6. Object
    class Student {
        function department() {
            return "CSE";
        }
    }
    $student = new Student;
    var_dump($student);

    // 7. NULL
    $name = null;
    var_dump($name);

    // 8. Resource
    $file = fopen("data-types.php", "r");
    var_dump($file);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap 5 cdn css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>
<body>
    

    <!-- bootstrap 5 js cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>