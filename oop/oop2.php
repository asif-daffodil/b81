<?php
    // Interfaces
    interface b81 {
        public function studentName1();
        public function studentName2();
        public function studentName3();
    }

    class php81 implements b81 {
        public function studentName1() {
            echo "Sara";
        }

        public function studentName2() {
            echo "Sumaiya";
        }

        public function studentName3() {
            echo "Sadia";
        }

        public function studentName4() {
            echo "Sadia";
        }

        public function __construct() {
            return ;
        }

        public function __destruct() {
            return ;
        }
    }

    $obj = new php81;
    $obj->studentName1();

    $objClone = clone $obj;

    // Overrides
    class asif {
        public $name = "Asif";
    }

    $AsifObj = new asif;
    $AsifObj->name = "Asif Abir";

    echo $AsifObj->name;

    class parrent {
        public function someMethod() {
            echo "Some Method";
        }
    }

    class child extends parrent {
        public function someMethod() {
            echo "Some Method 2";
            parent::someMethod();
        }
    }

    $obj = new child;
    $obj->someMethod();
?>