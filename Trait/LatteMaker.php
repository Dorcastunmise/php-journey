<?php

class LatteMaker extends CoffeeMaker {
    use LatteTrait;

    public function makeLatte() {
        echo static::class .  'is making latte' . PHP_EDL; #static is used to specify a return
    }
}
?>