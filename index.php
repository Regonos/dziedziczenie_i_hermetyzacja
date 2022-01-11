<?php

require_once "ContactInfo.php";


$contact_info = new ContactInfo("666555444", "test@test.pl", "ul. Mazowiecka 13", "Test", "Testowski", "70-777", "Szczecin", "Poland", "Zachodniopomorskie");

$x = $contact_info->__construct("6665554gfgfhgtf44", "test@test.pl", "ul. Mazowiecka 13", "Test", "Testowski", "70-777", "Szczecin", "Poland", "Zachodniopomorskie");

echo "";

//require_once "Cow.php";
//
///** @var Animal $animal */
//$animal = new Cow();
//echo $animal->breath();
//
//echo $animal->sound();

