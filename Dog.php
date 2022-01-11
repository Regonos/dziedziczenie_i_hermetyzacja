<?php

require_once "AbstractAnimal.php";

class Dog extends AbstractAnimal {
    function sound(): string {
        return "Woof woof";
    }
}
