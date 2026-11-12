
<?php

class Voiture {

    public $marque;
    public $couleur;

    public function setMarque($m) {
        $this->marque = $m;
    }

    public function setCouleur($c) {
        $this->couleur = $c;
    }

    public function afficher() {
        echo "Marque : " . $this->marque . PHP_EOL;
        echo "Couleur : " . $this->couleur . PHP_EOL;
    }
}

// Objet 1
$v1 = new Voiture();
$v1->setMarque("Toyota");
$v1->setCouleur("Noire");

// Objet 2
$v2 = new Voiture();
$v2->setMarque("Renault");
$v2->setCouleur("Rouge");

// Affichage
$v1->afficher();
$v2->afficher();

?>
