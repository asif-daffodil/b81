<?php

    // __toString(): This method is called by the echo statement or print() function to convert an object to a string.

    // __get($property) and __set($property, $value): These methods are used to handle reading and writing inaccessible properties, respectively.

    // __isset($property) and __unset($property): These methods are called when isset() or unset() is used on inaccessible properties.

    // __call($method, $args) and __callStatic($method, $args): These methods are invoked when calling methods that are not accessible or not defined in the class.

    // In PHP, the __invoke magic method allows an object to be called as a function. When an object is treated as a function, the __invoke method is automatically invoked. This can be useful when you want an object to be callable like a closure or a function.
    class GetSet
    {
        private $data = [];

        public function __get($name)
        {
            return $this->data[$name];
        }

        public function __set($name, $value)
        {
            $this->data[$name] = $value;
        }

        public function __isset($name)
        {
            return isset($this->data[$name]);
        }

        public function __unset($name)
        {
            unset($this->data[$name]);
        }

        public function __call($method, $args)
        {
            echo "Calling object method '$method' with arguments "
                . implode(', ', $args). "\n";
        }

        public static function __callStatic($method, $args)
        {
            echo "Calling static method '$method' with arguments"
                . implode(', ', $args). "\n";
        }

        public function __toString()
        {
            return "Instance of " . __CLASS__ . "\n";
        }

        public function testing ()
        {
            echo "ha ha ha";
        }

        public function __construct($arg)
        {
            echo "Constructor\ncalled $arg<br>";
        }

        public function __destruct()
        {
            echo "<br>Destructor called<br>";
        }

        public function __invoke($x)
        {
            var_dump($x);
        }
    }

    $obj = new GetSet("Asif");
    $obj->name = "Aslam";
    echo $obj->name;
    echo "<br>";
    echo $obj;
    echo "<br>";
    echo isset($obj->name);
    echo "<br>";
    unset($obj->name);
    echo isset($obj->name);
    echo "<br>";
    $obj->runTest('Hi', "Hello", "Assalamuoyalikum");
    echo "<br>";
    GetSet::runTest('Hi', "Hello", "Assalamuoyalikum");
    echo "<br>";
    $obj->testing();
    echo "<br>";
    $obj->test();
    echo "<br>";
    $obj(5);

?>