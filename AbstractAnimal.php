<?php

require_once "Animal.php";

abstract class AbstractAnimal implements Animal {

    function breath(): string {
        return "Wdech i wydech XD";
    }
}
