<?php

function repondre_oui_non ($phrase) {
  while(true){
    $reponse =  readline($phrase . "- (o/n) ");
    if ($reponse === "o") {
      return true;
    } elseif ($reponse === "n"){
      return false;
    } 
  }
}

function demander_creneau($phrase = 'Veuillez entrer un créneau') {
  echo $phrase . "\n";
  while (true) {
    $ouverture = (int)readline('Heure d\'ouverture : ');
    if ($ouverture >= 0 && $ouverture <= 23) {
      break;
    }
  }
  while (true) {
    $fermeture = (int)readline('Heure de fermeture : ');
    if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
      break;
    }
  }
  return [$ouverture, $fermeture];
}

// $resultats = repondre_oui_non(("voulez-vous continuer ? "));
// $creneau = demander_creneau();
// $creneau2 = demander_creneau('Veuillez entrer votre créneau');
// var_dump($creneau, $creneau2);

function demander_creneaux($phrase = 'Veuillez entrer vos créneaux') {
  $creneaux = [];
  $continuer = true;
  while ($continuer) {
    $creneaux[] = demander_creneau();
    $continuer = repondre_oui_non('Voulez vous continuer ? ');
  }
  return $creneaux;
}

// $resultats = repondre_oui_no('Voulez vous continuer ? ')

// $creneaux = demander_creneaux('Entrez vos créneaux ');
// var_dump($creneaux);