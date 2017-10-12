<?php

// Nous créons une classe « Personnage ».

class Personnage
{

  private $_force;
  private $_localisation;
  private $_experience = 50;
  private $_degats;

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function parler()
{
    echo 'Je suis un personnage !';
}
  // nous ajoutons une nouvelle public function
   public function gagnerExperience()
{
    // Cette méthode doit ajouter 1 à l'expérience du personnage.
  echo $this->_experience +1;

}

}

    

$perso = new Personnage;

$perso->parler();
$perso->gagnerExperience();


