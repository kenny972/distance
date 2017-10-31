<?php
class Personn
{
	public $name;
	public $firstName;
	public $adress;

// it's my constructor
	public function __construct($name, $firstName, $adress)
	{
		$this->name = $name;
		$this->firstName = $firstName;
		$this->adress = $adress;
	}

	function __destruct() {
        echo "Destroy of " . $this->name,fir . "\n";
    }

    

}
// here, it's my object
$kenny = new Personn("Kenny", "Genly", "Dunkerque");
var_dump($kenny->name);
var_dump($kenny->firstName);
var_dump($kenny->adress);


?>







<!-- Créez une classe représentant une personne. Elle doit avoir les
propriétés nom,prénom et adresse, ainsi qu’un constructeur et un
destructeur.
Une méthode getPersonne() doit retourner les coordonnées complètes
de la personne.
Une méthode setAdresse() doit permettre de modifier l’adresse de
la personne.
Créez
des objets personne, et utilisez l’ensemble des méthodes. -->