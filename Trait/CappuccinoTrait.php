<?php
    trait CappuccinoTrait {
        private function makeCappuccino() {
            echo static::class .  'is making Cappuccino' . PHP_EDL; #static is used to specify a return
        }
    }

?>