<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hello world <br>";
        require "./vehicule.php";

        $clio = new vehicule("clio4",4,180);
        $clio->getName();
        $ferrari = new vehicule("f40",4,300);

        echo $ferrari->getName();
        $ferrari->setName("titine");
        echo $ferrari->getname();

        $voiture = new vehicule(" Mercedes CLK",4,250);
        $moto = new vehicule("Honda CBR",2,280);
        echo "<br>";
        echo $voiture->detect();
        echo "<br>";
        echo $moto->detect();

        echo "<br>";
        $voiture->getSpeed();
        echo "<br>";
        $voiture->boost();
        echo "<br>";
        $voiture->getSpeed();
        echo "<br>";

        $voiture->plusRapide($voiture,$moto);
        echo "<br>";
        $clio->plusRapide($clio,$moto);
        echo "<br>";



        require "./personnage.php";
        $player1 = new personnage("gundam001",15,10,80);
        $player2 = new personnage("EVA-01",14,9,50);

        $azincourt = new combat(40,0,0);
        
        $azincourt->lancement($player1,$player2);


    





    ?>
    
</body>
</html>