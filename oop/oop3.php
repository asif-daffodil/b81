<?php
    interface test {
        public static function myFunc(string $f, int $l) :string;
    }

    final class myClass implements test {
        public static string $name = "Asif";

        private function __construct() {
            return ;
        }

        public static function myFunc(string $f, int $l):string {
            return "$f $l";
        }
    }

    echo myClass::$name;
    echo "<br>";
    echo myClass::myFunc("Asif", 123);


?>