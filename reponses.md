
# TP 4 – Programmation Orientée Objet en PHP
## Réponses aux questions

### Partie 0
**0.3** Non, chaque objet possède ses propres valeurs. `$v1` et `$v2` sont deux objets différents.

### Partie 1
**1.1**
- `$p->getName()` : fonctionne.
- `$p->nom` : fonctionne car nom est public.
- `$p->cin` : erreur car cin est private.
- `$p->dateNaissance` : erreur car dateNaissance est private.
- `$p->getAge()` : erreur car getAge() est private.

**1.2** Il est dangereux de laisser cin public car les informations personnelles peuvent être consultées ou modifiées directement.

**1.3** Non, getAge() peut être utilisée par une autre méthode de la même classe.

**1.4** Non, depuis l'extérieur, protected reste inaccessible.

### Partie 2
**2.1.a**
- `new Voiture("Noire")` : couleur = Noire et vitesse = 0.
- `new Voiture(120)` : erreur de type car le premier paramètre attend une chaîne.

**2.1.b** La promotion de propriétés permet de déclarer et initialiser les attributs directement dans le constructeur. Elle réduit le code.

**2.2.a** PHP ne permet pas de déclarer deux constructeurs dans une même classe. Cela provoque une erreur.

**2.2.b** Utiliser un seul constructeur avec des valeurs par défaut.

**2.2.c** Une méthode statique de fabrique permet de créer un objet avec une méthode portant un nom explicite.

**2.3.a** L'ordre est :
1. Voiture Blanche créée.
2. Voiture Blanche détruite.
3. Fin du script.

**2.3.b** Sans unset(), le destructeur est appelé à la fin du script.

**2.3.c** Les objets sont généralement détruits dans l'ordre inverse de leur création.

**2.3.d** Le destructeur affiche un message lors de la destruction de l'objet.

### Partie 3
**3.1**
- `__set()` : appelée lors de la modification d'une propriété inaccessible.
- `__get()` : appelée lors de la lecture d'une propriété inaccessible.
- `__isset()` : appelée avec isset().
- `__unset()` : appelée avec unset().

**3.2** Sans __set(), PHP signale une erreur ou un avertissement. Avec __set(), on peut contrôler la modification.

**3.3** Oui, si les valeurs ne sont pas validées. Il faut vérifier les données avant de les enregistrer.

**3.4** Utiliser trim(), strlen() et lancer InvalidArgumentException si le nom est invalide.

### Partie 4
**4.1** Parce que __toString() appartient à la même classe et peut donc appeler sa méthode privée getAge().

**4.2** PHP exige que __toString() retourne une chaîne. Un entier provoque une erreur de type.

**4.3**
- Permet d'afficher directement un objet avec echo.
- Facilite l'affichage des objets dans les chaînes de caractères.

### Partie 5
**5.1** Le mot de passe n'apparaît pas dans la chaîne sérialisée.

**5.2** Sans __serialize(), les propriétés privées peuvent être incluses dans la sérialisation. Cela peut exposer des informations sensibles.

**5.3** Après unserialize(), le mot de passe est une chaîne vide. Dans une vraie application, il faut gérer la réinitialisation sécurisée du mot de passe.

**5.4** Il ne faut jamais utiliser unserialize() sur des données non fiables car cela peut provoquer une attaque PHP Object Injection. On peut utiliser JSON avec json_encode() et json_decode().

### Partie 6
**6.1.a** Créer une classe Chat qui hérite de Animal et possède une méthode miauler().

**6.1.b** Non, car $c est un objet Chien et ne possède pas la méthode miauler().

**6.2.a** Sans parent::__construct($nom), le constructeur de Personne n'est pas appelé et le nom n'est pas initialisé correctement.

**6.2.b** protected permet à la classe Etudiant d'accéder à nom, contrairement à private.

**6.3.a**
1. Redéfinir une méthode final provoque une erreur.
2. Hériter d'une classe final provoque une erreur.
3. Modifier une propriété readonly après son initialisation provoque une erreur.

**6.3.b**
- readonly : un identifiant unique.
- final : une méthode de sécurité qui ne doit pas être redéfinie.

**6.4.a** Si getAge() est private, Etudiant ne peut pas l'appeler directement. Il faut utiliser protected.

**6.4.b** dateNaissance est private, donc elle est accessible uniquement dans Personne.

**6.4.c** parent::__toString() permet de réutiliser le code de la classe mère et d'éviter la répétition.

### Partie 7
**7.1** Il manque l'opérateur `+` dans la formule.

**7.2** La formule correcte est :
`montant = montant * (1 + interet / 100)`

**7.3** Non, l'ordre n'est pas cohérent. Il faut mettre le montant initial en premier, puis l'intérêt. Sinon, on risque d'inverser les valeurs.

**7.4** Le code corrigé utilise les types float, les types de retour et number_format() pour afficher deux chiffres après la virgule.

### Questions de synthèse
**1.** Une classe est un modèle qui définit les attributs et les méthodes. Un objet est une instance de cette classe.

**2.** Trois avantages de la POO :
- Réutilisation du code.
- Encapsulation des données.
- Organisation et maintenance plus faciles.

**3.** Les attributs private ou protected protègent les données contre les accès et modifications non contrôlés.

**4.** private est accessible uniquement dans la classe. protected est accessible dans la classe et ses classes filles.

**5.** Oui, les méthodes magiques doivent généralement être déclarées public pour être appelées automatiquement par PHP.
