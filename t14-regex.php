<?php  
    // Regular Expression
    // preg_match(), preg_match_all(), preg_replace(), preg_filter(), preg_grep(), preg_split()
    $str = "Hello world! Hello Bangladesh! Hello Dhaka!";
    $pattern = "/Hello/";
    echo preg_match($pattern, $str)."<br>"; // 1
    echo preg_match_all($pattern, $str)."<br>"; // 3
    echo preg_replace($pattern, "Hi", $str)."<br>"; // Hi world! Hi Bangladesh! Hi Dhaka!
    echo preg_filter($pattern, "Hi", $str)."<br>"; // Hi world! Hi Bangladesh! Hi Dhaka!
    echo preg_grep($pattern, [$str])."<br>"; // Array ( [0] => Hello world! Hello Bangladesh! Hello Dhaka! )
    echo preg_split($pattern, $str)."<br>"; // Array ( [0] => [1] => world! [2] => Bangladesh! [3] => Dhaka! )

    // $pattern
    // /Hello/ - case sensitive
    // /Hello/i - case insensitive

    // Character classes
    // /h.llo/ - matches any character except newline
    // /h[ae]llo/ - matches either 'hello' or 'hallo'
    // /h[a-z]llo/ - matches any single character of range a-z
    // /h[^e]llo/ - matches any single character except e

    // Quantifiers
    // /hel+o/ - matches any string that contains at least one l
    // /hel*o/ - matches any string that contains zero or more l
    // /hel?o/ - matches any string that contains zero or one l
    // /hel{2}o/ - matches any string that contains 2 l
    // /hel{2,}o/ - matches any string that contains at least 2 l
    // /hel{2,4}o/ - matches any string that contains 2 to 4 l

    // Metacharacters
    // /h.llo/ - matches any character except newline
    // /h[ae]llo/ - matches either 'hello' or 'hallo'
    // /h[a-z]llo/ - matches any single character of range a-z

?>