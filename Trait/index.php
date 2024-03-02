<?php
    include __DIR__ . 'Cappuccino.php';
    include __DIR__ . 'CappuccinoTrait.php';
    include __DIR__ . 'LatteMaker.php';
    include __DIR__ . 'LatteTrait.php';


    $coffeeMaker = new Trait\CoffeeMaker();
    $coffeeMaker->makeCoffee();

    $LatteMaker = new Trait\LatteMaker();
    $LatteMaker->makeCoffee();
    $LatteMaker = new Trait\LatteMaker();
    $CappuccinoMaker->makeLatte();

    $CappuccinoMaker = new Trait\CappuccinoMaker();
    $CappuccinoMaker->makeCoffee();
    $CappuccinoMaker->makeCappuccino();

    
    $AllInOneCoffeeMaker = new Trait\AllInOneCoffeeMaker();
    $AllInOneCoffeeMaker->makeCoffee();
    $AllInOneCoffeeMaker->makeLatte();
    $AllInOneCoffeeMaker->makeCappuccino();
?>