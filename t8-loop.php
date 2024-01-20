<?php  
    /**
     * while loop
     * start point
     * end point
     * increment or decrement
     */

    $s = 0;
while ($s < 10){
    echo $s;
    $s++;
}

echo "<br>";
$g = 2;
for ($i=1; $i <= 10; $i++) { 
    echo "$g x $i = ".($g*$i)."<br>";
}

echo "<br>";

// do while loop

$y = 20;
/* while ($y < 10){
    echo $y;
    $y++;
}
 */
do{
    echo $y;
    $y++;
}while($y < 10);


echo "<br>";

// break and continue

for ($i=0; $i < 10; $i++) { 
    if($i === 5){
        break;
    }
    echo $i;
}

echo "<br>";

for ($i=0; $i < 10; $i++) { 
    if($i === 5){
        continue;
    }
    echo $i;
}

?>