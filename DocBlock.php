<?php
    /**
     * Some description
     * @param Customer $customer
     * @param float/int $amount  - multiple types, though php 8 accepts using union to declare multiple types   
     * 
     * @throws \RuntimeException -what exception is expected to be thrown from a method
     * @throws \InvalidArgumentException
     * 
     * @property-read int $x
     * @property-write int $y
     *  @property int $z
     * 
     * @method static int foo(string $x, array $y)
     * @return bool
     */
    class Transaction {

        public function process($customer, $amount) {
            $x = 431;
            $y = 391;
            $z = 3253;
            return true;
        } 
        # __call() can call existing methods (also methods in another objects)
        public function __call(string $name, array $arguments) {

        }
        public static function __callStatic(string $name, array $arguments) {

        }
    }

?>