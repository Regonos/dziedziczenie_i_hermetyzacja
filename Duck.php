<?php

require_once "AbstractAnimal.php";

class Duck extends AbstractAnimal {



    function sound(): string {
        return "Quack quack";
    }
}
