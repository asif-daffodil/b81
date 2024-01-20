<?php  
    // String functions
    echo strlen("Hello world!")."<br>"; // 12
    echo str_word_count("Hello world!")."<br>"; // 2
    echo strrev("Hello world!")."<br>"; // !dlrow olleH
    echo strpos("Hello world!", "world")."<br>"; // 6
    echo str_replace("world", "Dolly", "Hello world!")."<br>"; // Hello Dolly!
    echo str_repeat("Hello", 5)."<br>"; // HelloHelloHelloHelloHello
    echo str_shuffle("Hello world!")."<br>"; // !rHdloolwle
    echo substr("Hello world!", 6)."<br>"; // world!
?>