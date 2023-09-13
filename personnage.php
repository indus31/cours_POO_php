<?php

class personnage{
    public string $nom;
    public int $force;
    public  int $defense;
    public int $vie;
    public function __construct(string $nouvelleNom, int $nouvelleForce, int $nouvelleDefense,int $nouvelleVie){
        $this->nom = $nouvelleNom;
        $this->force = $nouvelleForce;
        $this->defense = $nouvelleDefense;
        $this->vie = $nouvelleVie;

    }
    public function attaquer(personnage $attaquant,personnage $attaqué){
        $critical = rand(1,10);
       $degat =  $attaquant->force - $attaqué->defense ;
       if($critical == 10){
        $degat = $degat*2;
        
        $attaqué->vie = $attaqué->vie - $degat;
        echo "<br>COUP CRITIQUE !!!!!!".$attaquant->nom." attaque et inflige ".$degat." points de dégats";

       }else{
        $attaqué->vie = $attaqué->vie - $degat;
       echo "<br>".$attaquant->nom." attaque et inflige ".$degat." points de dégats";
       }
       

    }
    

}

class combat{
    public int $nbrTour;
    public int $scoreJ1;
    public int $scoreJ2;
    public function __construct(int $nouveauNbrTour,int $nouveauScoreJ1,int $nouveauScoreJ2){
        $this->nbrTour = $nouveauNbrTour;
        $this->scoreJ1 = $nouveauScoreJ1;
        $this->scoreJ2 = $nouveauScoreJ2;
    }
    public function lancement(personnage $joueur1,personnage $joueur2){
        
       for($i = 0;$i<$this->nbrTour;$i++){
        if($joueur1->vie <=0 || $joueur2->vie <=0){
            echo "<br>combat terminée en ".$i." tours";
            
            $i = $this->nbrTour;
            
        }else{
             // echo $joueur1->nom." attaque <br>";
            $joueur1->attaquer($joueur1,$joueur2);
            
            //echo $joueur2->nom." attaque <br>";
            $joueur2->attaquer($joueur2,$joueur1);
        }
       
         
       }
       if($joueur1->vie <= 0){
        echo "<br>".$joueur2->nom. " a gagné,il lui reste ".$joueur2->vie. " point de vie contre ".$joueur1->vie." point de vie de ".$joueur1->nom;
       }else if($joueur2->vie <=0){
        echo "<br>".$joueur1->nom. " a gagné,il lui reste ".$joueur1->vie." point de vie contre ".$joueur2->vie." point de vie de ".$joueur2->nom; 
       }else{
        echo "aucun point de vie n'est à 0 ";
       }

    }

}































?>