<?php
require_once "AbstractAnimal.php";

class Cow extends AbstractAnimal {
    function sound(): string {
        return "Muuuuuuuu";
    }
}
