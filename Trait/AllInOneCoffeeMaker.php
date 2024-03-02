<?php
    class AllInOneCoffeeMaker extends CoffeeMaker {
        use CappuccinoTrait {
            CappuccinoTrait::makeCappuccino as public;
        }
        use LatteTrait {
            LatteTrait::makeLatte insteadOf CappuccinoTrait;
        }
    }
?>
    