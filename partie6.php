<?php

class Personne {

    protected string $nom;
    protected string $prenom;

    private string $dateNaissance;
    private string $villeNaissance;
    private string $cin;

    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $villeNaissance,
        string $cin
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
    }

    protected function getAge(): int {
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();

        return $naissance->diff($aujourdhui)->y;
    }

    public function __toString(): string {
        return $this->prenom . " " . $this->nom .
               " - " . $this->getAge() . " ans";
    }
}

class Etudiant extends Personne {

    private string $cne;

    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $villeNaissance,
        string $cin,
        string $cne
    ) {
        parent::__construct(
            $nom,
            $prenom,
            $dateNaissance,
            $villeNaissance,
            $cin
        );

        $this->cne = $cne;
    }

    public function getCne(): string {
        return $this->cne;
    }

    public function __toString(): string {
        return parent::__toString() .
               " - CNE : " . $this->getCne();
    }
}

// Création de 5 étudiants

$etudiants = [];

$etudiants[] = new Etudiant("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456", "CNE001");
$etudiants[] = new Etudiant("Amrani", "Ahmed", "2001-03-20", "Rabat", "EE123457", "CNE002");
$etudiants[] = new Etudiant("Alaoui", "Salma", "2002-07-10", "Casa", "EE123458", "CNE003");
$etudiants[] = new Etudiant("Fassi", "Youssef", "1999-11-25", "Fes", "EE123459", "CNE004");
$etudiants[] = new Etudiant("Bennani", "Imane", "2001-09-15", "Agadir", "EE123460", "CNE005");

// Affichage des étudiants

foreach ($etudiants as $etudiant) {
    echo $etudiant . PHP_EOL;
}

?>