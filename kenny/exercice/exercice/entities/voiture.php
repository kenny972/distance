<?php
require ("entities/voiture.php");






$voiture = new Clio(Clio::PORTE_MOYENNE, "black");
$voiture1 = new Clio(Clio::PORTE_PETITE, "red");
$voiture2 = new Clio(Clio::PORTE_MOYENNE, "yellow");

// appel la vue
require 'view/indexVue.php';