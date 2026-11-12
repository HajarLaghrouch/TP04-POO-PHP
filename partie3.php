<?php

class Personne {

    private array $donnees = [];

    public function __set(string $name, mixed $value): void {

        if ($name === "nom") {
            if (empty($value) || strlen($value) < 2) {
                throw new InvalidArgumentException("Le nom doit contenir au moins 2 caractères.");
            }
        }

        $this->donnees[$name] = $value;
    }

    public function __get(string $name): mixed {
        return $this->donnees[$name] ?? null;
    }

    public function __isset(string $name): bool {
        return isset($this->donnees[$name]);
    }

    public function __unset(string $name): void {
        unset($this->donnees[$name]);
    }
}

// Création d'un objet
$p = new Personne();

// __set
$p->nom = "Hachimi";
$p->prenom = "Sara";

// __get
echo $p->nom . PHP_EOL;
echo $p->prenom . PHP_EOL;

// __isset
var_dump(isset($p->nom));

// __unset
unset($p->nom);

// Vérification après suppression
var_dump(isset($p->nom));

// Propriété inexistante
$p->telephone = "0600000000";
echo $p->telephone . PHP_EOL;

?>