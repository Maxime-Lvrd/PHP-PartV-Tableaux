<?php

// tableau ex1
$month = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

// tableau associatif ex5
$hautDeFrance = array (
    '02' => 'Aisne',
    '59' => 'Nord', 
    '60' => 'Oise', 
    '62' => 'Pas-de-Calais', 
    '80' => 'Somme');



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercices PHP - Part. V</title>
</head>
<body>
    
<h1>Exercices PHP</h1>

    <h2>PARTIE V - Les tableaux</h2>

    <h3>Exercice 1</h3>
    <!-- Créer un tableau months et l'initialiser avec les valeurs suivantes :
    - janvier
    - février
    - mars
    - avril
    - mai
    - juin
    - juillet
    - aout
    - septembre
    - octobre
    - novembre
    - décembre -->
    <p><?php foreach($month as $element) {
        echo $element . '<br>'; } ?></p>

    <h3>Exercice 2</h3>
    <!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->
    <p><?= $month[2] ?></p>

    <h3>Exercice 3</h3>
    <!-- Avec le tableau de l'exercice 1, afficher la valeur de l'index 5. -->
    <p><?= $month[5] ?></p>

    <h3>Exercice 4</h3>
    <!-- Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->
    <p><?php array_splice($month, 7, 1, 'août');
        foreach($month as $element) {
            echo $element . '<br>'; } ?></p>

    <h3>Exercice 5</h3>
    <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->
        <p><?php var_dump($hautDeFrance); ?></p>
        <p><?php foreach($hautDeFrance as $element) {
            echo $element . '<br>'; } ?></p>

    <h3>Exercice 6</h3>
    <!-- Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->
    <p><?= $hautDeFrance[59] ?></p>

    <h3>Exercice 7</h3>
    <!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->
    <p><?php $hautDeFrance[51] = 'Marne';
          var_dump($hautDeFrance); ?></p>
    <p><?php foreach($hautDeFrance as $element) {
            echo $element . '<br>'; } ?></p>

    <h3>Exercice 8</h3>
    <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
    <p><?php for ($element = 0; $element < 11; $element++) {
        echo $month[$element] . '<br>'; } ?></p>

    <h3>Exercice 9</h3>
    <!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->
    <p><?php foreach($hautDeFrance as $element) {
            echo $element . '<br>'; } ?></p>

    <h3>Exercice 10</h3>
    <!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
    Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département -->
    <p><?php foreach($hautDeFrance as $key => $element) {
        echo 'Le département ' . $element . ' a le numéro ' . $key . '.<br>'; } ?></p>


</body>
</html>