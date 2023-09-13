<?php
class Vehicule{
/*-----------------------------------------------------
Attributs :
-----------------------------------------------------*/
    private ?string $nomVehicule ;
    private ?int $nbrRoue;
    private ?int $vitesse ;
    public function __construct(string $nouveauNom,int $nouveauNbrRoue,int $nouveauVitesse){
        $this->nomVehicule = $nouveauNom;
        $this->nbrRoue = $nouveauNbrRoue;
        $this->vitesse = $nouveauVitesse;
    }
    //fonction démarrer le véhicule
    public function detect(){
        switch($this->nbrRoue){
            case 2 :
                return "moto";
                
            case 4 :
                return "voiture";
                
        }
    }
    public function plusRapide($voiture,$moto){
        $vitesse1 = $voiture->vitesse;
        $vitesse2 = $moto->vitesse;
        if($vitesse1>$vitesse2){
            echo $vitesse1;
        }else{
            echo $vitesse2;
        }
    }
        
    public function boost(){
        $this->vitesse += 50;
    }
    public function getSpeed(){
        echo $this->vitesse;
    }
    public function getName():?string{
        return $this->nomVehicule;
    }
    public function setName(string $newName):void{
        $this->nomVehicule = $newName;
    }
    public function demarrer(){
    echo "<p>Démarrage de la $this->nomVehicule Vrooom !!!!</p>";
    }
}
?>