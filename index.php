
<?php
    // Exercice 1
    // Créer une variable et l'initialiser à 0.  
    // Tant que cette variable n'atteint pas 10, il faut :
    // - l'afficher
    // - l'incrementer
    echo "Exo1: ";
    $maVar=0;
    while ($maVar <= 10) {
        echo $maVar++.' ';
    }
    ## Exercice 2 Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
    // Tant que la première variable n'est pas supérieur à 20 :
    // - multiplier la première variable avec la deuxième
    // - afficher le résultat
    // - incrementer la première variable
    echo "<br>Exo2: ";
    $maVar1=0;
    $maVar2=5;
    while ($maVar1<20) {
        $result=$maVar1*$maVar2;
        echo $result." ";
        $maVar1++;
    }
    ## Exercice 3 Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
    // Tant que la première variable n'est pas inférieur ou égale à 10 :
    // - multiplier la première variable avec la deuxième
    // - afficher le résultat
    // - décrémenter la première variable
    echo "<br>Exo3: ";
    $maVar1=100;
    $maVar2=50;
    while ($maVar1>10) {
        $result=$maVar1*$maVar2;
        echo $result." ";
        $maVar1--;
    }
    // Exercice 4
    // Créer une variable et l'initialiser à 1.  
    // Tant que cette variable n'atteint pas 10, il faut :
    // - l'afficher
    // - l'incrementer de la moitié de sa valeur
    echo "<br>Exo4: ";
    $maVar=1;
    while ($maVar<=10) {
        echo $maVar.' ';
        $maVar=$maVar+($maVar/2);
    }
    // ## Exercice 5 En allant de 1 à 15 avec un pas de 1, afficher le message **On y arrive presque**.
    echo "<br>Exo5: ";
    $maVar=1;
    while ($maVar<=15) {
        echo 'On y arrive presque ';
        $maVar++;
    }
    //## Exercice 6 En allant de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.
    echo "<br>Exo6: ";
    $maVar=20;
    while ($maVar>=0) {
        echo 'C\'est preque bon ';
        $maVar--;
    }
    // Exercice 7 En allant de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**.
    echo "<br>Exo7: ";
    $maVar=1;
    while ($maVar<=100) {
        echo 'C\'est preque bon ';
        $maVar=$maVar+15;
    }
    //## Exercice 8 En allant de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!
    echo "<br>Exo8 (avec While) : ";
    $maVar=200;
    while ($maVar>=0) {
        echo 'Enfin !!!!';
        $maVar-=12;
    }
    echo "<br>Exo8bis (avec For) : ";
    for ($maVar=200; $maVar >= 0; $maVar-=12) {
        echo 'Enfin !!!!';
       }


?>