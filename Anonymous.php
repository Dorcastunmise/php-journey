<?php
    /*
        Anonymous classes
        - can have arguments through the constructor
        - can use inheritance & extend other classes, implement interfaces as well
        -cannot access the properties of the main class/ methods but by passing to the constructor or extending classes into anonymous class
        - Use case: Testing
    */
    $obj = new class(1, 2, 3) extends someClass implements myInterface {
        use MyTrait;

        public function __construct(public int $x, public int $y, public int $z) {}

        public function foo(): string {
            return 'foo';
        }
        public function bar(): object {
            return new class($this-x,$this-y) extends ClassA {  #passing to the anonymous class too in order to ensure the arguments are well passed
                public function __construct(public int $x, public int $y) {
                    parent::__construct($x, $y);
                    $this->foo();
                }
            };
        }
    };
    var_dump($obj);
?>