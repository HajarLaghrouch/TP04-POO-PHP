<?php

class Utilisateur {

    private string $nom;
    private int $age;
    private string $motDePasse;

    public function __construct(string $nom, int $age, string $motDePasse) {
        $this->nom = $nom;
        $this->age = $age;
        $this->motDePasse = $motDePasse;
    }

    public function __serialize(): array {
        return [
            'nom' => $this->nom,
            'age' => $this->age
        ];
    }

    public function __unserialize(array $data): void {
        $this->nom = $data['nom'];
        $this->age = $data['age'];
        $this->motDePasse = "";
    }
}

$u = new Utilisateur("Alice", 25, "secret123");

$serialise = serialize($u);

echo "Objet sérialisé :" . PHP_EOL;
echo $serialise . PHP_EOL;

$restaure = unserialize($serialise);

echo "Objet restauré :" . PHP_EOL;
var_dump($restaure);

?>