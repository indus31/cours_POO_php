<?php
//il faut toujours nommer son fichier qui contient la classe avec le nom de la classe
//ex : la class maison donnera maison.php

//correction exercice 1 POO

//fichier Maison.php

class Maison{
    public ?string $nom;
    public ?float $longueur;
    public ?float $largeur;
    public function __construct(?string $nouveauNom, 
    float $nouveauLongueur, float $nouveauLargeur){
        $this->nom = $nouveauNom;
        $this->longueur = $nouveauLongueur;
        $this->largeur = $nouveauLargeur;
    }
    public function surface():float{
       return $this->longueur*$this->largeur;
    }
}

//fichier test_objet.php

//import de la classe Maison
include './Maison.php';
//instance de 2 objets Maison
$villa = new Maison(null, 50, 30);
$studio = new Maison('studio', 10, 8);
//appel de la fonction surface
echo "<p>la surface de ".$villa->nom." est égale à :".$villa->surface()." m2</p>";
echo "<p>la surface de ".$studio->nom." est égale à :".$studio->surface()." m2</p>";

// BONUS EXO 1


// class Maison{
//     public ?string $nom;
//     public ?float $longueur;
//     public ?float $largeur;
//     public ?int $nbrEtage;
//     public function __construct(?string $nouveauNom, 
//     ?float $nouveauLongueur, ?float $nouveauLargeur, ?int $nouveauEtage){
//         $this->nom = $nouveauNom;
//         $this->longueur = $nouveauLongueur;
//         $this->largeur = $nouveauLargeur;
//         $this->nbrEtage = $nouveauEtage;
//     }
//     public function surface():float{
//         if($this->nbrEtage > 0 ){
//             return $this->longueur*$this->largeur*($this->nbrEtage+1);
//         }else{
//             return $this->longueur*$this->largeur;
//         }
//     }
// }

// fin exo 1


//EXO 2 VEHICULE

//Classe Vehicule

class Vehicule{
    public ?string $nom;
    public ?int $roue;
    public ?int $vitesse;
    public function __construct(?string $newNom, ?int $newRoue, ?int $newVitesse){
        $this->nom = $newNom;
        $this->roue = $newRoue;
        $this->vitesse = $newVitesse;
    }
    public function detect():?string{
        if($this->roue == 4){
            return "Voiture";
        }else if($this->roue == 2){
            return "Moto";
        }else{
            return "Autre";
        }
    }
    public function boost():void{
        $this->vitesse += 50;
    }
    public function plusRapide(Vehicule $rival):?string{
        if($this->vitesse >$rival->vitesse){
            return $this->nom;
        }else if($this->vitesse == $rival->vitesse){
            return "Identique";
        }else{
            return $rival->nom;
        }
    }
}
include './Vehicule.php';
    $voiture = new Vehicule('Mercedes CLK',4,250);
    $moto = new Vehicule('Honda CBR',2,280);
    echo "<p>Le véhicule : ".$voiture->nom." est de type : ".$voiture->detect()."</p>";
    echo "<p>Le véhicule : ".$moto->nom." est de type : ".$moto->detect()."</p>";
    $voiture->boost();
    echo "<p>La nouvelle vitesse du véhicule : ".$voiture->nom." est  de : ".$voiture->vitesse."</p>";
    echo "<p>Le véhicule le plus rapide est : ".$moto->plusRapide($voiture)."</p>";


//CLASS domdocument pour créer des element html;

/*les attributs public , private, protected
public
private accessible uniquement à l'interieur de la classe, renverra indefined si jamais

protected


ecrire --> setters
retrouver --> getters avec un return */


//class Utilisateur

class Utilisateur{
    private ?string $nom;
    private ?string $prenom;

    public function __construct(?string $nom, ?string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom():?string{
        return $this->nom;
    }
    public function setNom(?string $nom){
        $this->nom = $nom;
    }
    public function getPrenom():?string{
        return $this->prenom;
    }
    public function setPrenom(?string $prenom){
        $this->prenom = $prenom;
    }
}


//class Admin

class Admin extends Utilisateur{
    
    public function __construct(?string $nom, ?string $prenom){
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }
}
?>













?>