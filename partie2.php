<?php

class Voiture {
    public string $couleur;
    public int $vitesse;

    public function __construct(string $couleur = "Blanche", int $vitesse = 0) {
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);

$v1->afficher();
$v2->afficher();

class Personne {
    public string $nom;
    public string $prenom;

    public function __construct(string $nom = "", string $prenom = "") {
        echo "Création Personne" . PHP_EOL;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficher(): void {
        echo $this->prenom . " " . $this->nom . PHP_EOL;
    }
}

$p1 = new Personne();
$p2 = new Personne("Hachimi", "Sara");

$p2->afficher();

class Voiture2 {
    public string $couleur;

    public function __construct(string $couleur) {
        $this->couleur = $couleur;
        echo "Voiture {$this->couleur} créée." . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

$maVoiture = new Voiture2("Blanche");

unset($maVoiture);

echo "Fin du script." . PHP_EOL;

?>