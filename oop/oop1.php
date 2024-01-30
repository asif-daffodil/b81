<?php
    class b81 {
        public $studentName1 = "Sara";
        protected $studentName2 = "Sumaiya";
        private $studentName3 = "Sadia";
        public const batch = "Batch 81";
        public static $studentName6 = "Shima";

        public function __construct()
        {
            echo "This is a constructor<br>";
        }

        public function __destruct()
        {
            echo "<br>This is a destructor";
        }

        public function studentName4() {
            return $this->studentName3;
        }
    }

    class php81 extends b81 {
        public function studentName5() {
            return $this->studentName2;
        }
    }

    $obj = new b81;
    echo $obj->studentName1;
    echo "<br>";
    echo $obj->studentName4();
    echo "<br>";
    echo b81::batch;
    echo "<br>";
    echo b81::$studentName6;

    echo "<br>";

    $obj2 = new php81;
    echo $obj2->studentName5();
?>