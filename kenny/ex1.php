<?php

// I declare here my class
class theCountry
		{ //I declare my arguments:
	private $_location;
	private $_name;
	private $_continent;
	public function thePlace($_location,$_name, $_continent)
		{// I order that my arguments be posted
    echo " The capital of " . $_location . " is called " . $_name . ". It's located in South America, in the " . $_continent;
		}
		}
$city = new theCountry; // I declare here my object
$city->thePlace("Martinique","Fort-De-France", "Caraibbean zone"); //I retrieve what is in public function


?>
