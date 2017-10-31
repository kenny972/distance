 
<?php
declare(strict_types=1);

class Clio
{
  private $_porte;
  private $_couleur;

const PORTE_PETITE = 3;
  const PORTE_MOYENNE = 5;
  const COULEUR = array(
    red  => #FF0000 ,
    blue => #0000FF ,
    black => #000000 ,
);


private static $_prix = 2500;

public function __construct($porte, $couleur)
    {
      $this->setPorte($porte);
      $this->setCouleur($couleur);
    }


  public function info()
  {
   echo  'Renault Clio ',  $this->_porte , ' porte, couleur ', $this->_couleur, ' prix ', Clio::cout(),'  </br>';
  }

    public function setPorte($porte)
        {
          $this->_porte = $porte;
        }
      public function setCouleur($couleur)
        {
          $this->_couleur = $couleur;
        }


    public function getPorte()
      {
      return  $this->_porte;
      }
      public function getCouleur()
      {
      return  $this->_couleur;
      }

    public static function cout()
      {
       echo self::$_prix;
      }

}


