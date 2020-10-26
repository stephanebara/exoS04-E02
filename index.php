<?php
/*
Caracteristiques
Données

// Nom / prenom
// adresse
// email / tel

Action 

// Marche 
// parler
// saluer
*/

// Pour créer un objet on doit d'abord dire à PHP comment fabriquer ce type d'objet
// si je veux créer des objet pour "representer" une personne dans omn application
// je doit d'abord créer le modèle le "moule" pour que PHP puis ensuite créer des objets à partir de ce moule

// 1- pour déclarer une nouvelle classe (un nouveau moule) on commance par le mot clé "class"

// 2- on donne un nom a ce modèle ou classe pour le réutiliser plus tard
class Person {

    // ajouter des propriétés
    // des variable qui sont attachées aux objets créés grâce a cette classe
    public $name;

    public $birthDate;

    // on peut décrire des méthode (des fonctions) qui sont attachées à l'objet qui sera crée en suivant le modele de la classe
    public function sayHello() {
        echo "Bonjour ! Mon nom est " . $this->name . "je suis née le" . $this->birthDate . "\n";
    }
    // "this" veut dire "dans l'objet dans lequel je suis" 
    
    public function sayHelloAndGoodbye() {
        $this->sayHello();
        echo "Goodbye \n";
    }
}

// Maintenant que le modèle est connu de PHP
// on peut créer un objet à partir de la classe, faire une instance
// pour cela on utilise le mot clé "new" suivi du nom du modèle (de la classe)
$person1 = new Person;

// une fois l'objet créé et lié à une variable
// on peut acceder au contenu de l'objet grâce au signe "->"
$person1->name = "Luc \n";
$person1->birthDate = "21/04/1986";


$person2 = new Person;
$person2->name = "Fabio \n";
$person2->birthDate = "01/01/2001";
// on peut egalement appeler les methodes de l'objet grâce a l'operateur "->"

$person1->sayHello();
$person2->sayHelloAndGoodbye();

// Compte en banque

//////////Propriétés
// IBAN
// Num Client
// solde
// Nom
// BIC

/////////Méthodes
// faire un cirement
// retrait
// consulter le solde
// depot

class BankAccount {
    public $iban;  
    public $solde;

    public function __construct($iban) {
        $this->solde = 0;
        $this->iban = $iban;
    }

    public function retrait($value) {
        $this->solde -= $value;
    }
    public function depot($value) {
        $this->solde += $value;
    }
    public function consulter() {
        echo "le compte " . $this->iban . "contient :" . $this->solde . "€" . "\n" ;
    }
}

// a chaque fois que l'on va construire un objet (avec le "new") PHP va automatiquement appeler le constructeur s'il éxiste (__construct())
$lucBankAccount = new BankAccount("FR454645456465");
// ici juste apres avoir créé l'objet PHP appel le constructeur
// ensuite on continu le code normalement

// dans le construct j'ai initialiser le solde du compte à 0 donc on va afficher "Le compte contient 0€"
$lucBankAccount->retrait(500);// equivalent à $lucBankAccount->solde -= 500
$lucBankAccount->depot(1000);// equivalent à $lucBankAccount->solde += 1000
$lucBankAccount->consulter();

$fabioBankAccount = new BankAccount("FR454647854187");
$fabioBankAccount->retrait(200);// equivalent à $lucBankAccount->solde -= 200
$fabioBankAccount->depot(500);// equivalent à $lucBankAccount->solde += 500
$fabioBankAccount->consulter();

