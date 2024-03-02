<?php
    trait LatteTrait {
        private string $milkType = 'whole-milk';
        /* when a trait has a static property, each class that uses that trait will have the independent instance of that property
        unlike iheritance where the static property is shared
        */
        
        public static int $x = 1;
        
        public function makeLatte() {
            echo static::class .  'is making latte' . PHP_EDL; #static is used to specify a return
        }

        public static function foo() {
            echo 'foo bar' . PHP_EOL;
        }

        public function setMilkType(string $milkType): static {
            $this->milkType = $milkType;
            return $this;
        }
    }
?>