<?php

//Class I'm going to use
use cinema\Autoloading;
use cinema\Film;
use cinema\Realisateur;
use cinema\Acteur;
use cinema\Role;
use cinema\Genre;
use cinema\Casting;

//Calls Class Autoloading
require_once 'Class/Autoloading.php';
Autoloading::register();

//Set objects, I creates my data base
/*-------------------------------------------------------------------------------------------------------------------------------*/

//My directors
$realisateur1 = new Realisateur('Jodorowsky', 'Alejandro', '28-05-1983');
$realisateur2 = new Realisateur('Kubrick', 'Stanley', '29-12-2019');
$realisateur3 = new Realisateur('Henson', 'Jim', '29-11-1958');

//My actors
$acteur1 = new Acteur('Willies', 'Brouce', '10-04-1980');
$acteur2 = new Acteur('Pitt', 'Brad', '30-03-1975');
$acteur3 = new Acteur('Bacri', 'Jean-Pierre', '23-06-1995');
$acteur4 = new Acteur('Connelly', 'Jennifer', '22-01-1975');
$acteur5 = new Acteur('Bowie', 'David', '23-03-1795');

//My genres
$genre1 = new Genre('Science-fiction');
$genre2 = new Genre('Fantasy');

//My films with his castings and roles 
$film1 = new Film(
    'El topo',
    '1970',
    125,
    'Hors-la-loi, El Topo défie pour l\'amour d\'une femme les Quatre Maîtres du Désert. 
    Les ayant vaincus, sa conscience s\'élève jusqu\'à ce que sa femme le trahisse. 
    Sa nouvelle vie d\'homme saint commence alors, et El Topo s\'engage dans la libération d\'une communauté de parias.',
    $genre1,
    $realisateur1
);
$role1 = new Role('El Bueno');
$role2 = new Role('El feo');
$role3 = new Role('El malo');
$casting1 = new Casting($film1, [
    [$role1, $acteur1],
    [$role2, $acteur3],
    [$role3, $realisateur1]
]);

$film2 = new Film(
    'La montagne sacrée',
    '1974',
    109,
    'Après une série de procès et de tribulations, un voleur vagabond rencontre un maître spirituel qui lui présente
    sept personnages riches et puissants, représentant une planète du système solaire. 
    Ensemble ils entreprennent un pèlerinage vers la Montagne Sacrée afin d\'en déloger les dieux qui y demeurent et atteindre l\'immortalité.',
    $genre1,
    $realisateur1
);
$role4 = new Role('El iluminado', $acteur1);
$role5 = new Role('El materialista', $acteur3);
$casting2 = new Casting($film2, [
    [$role4, $acteur1],
    [$role5, $acteur2]
]);

$film3 = new Film(
    '2001: l\'odyssée de l\'espace',
    '1968',
    140,
    " A l'aube de l'Humanité, dans le désert africain, une tribu de primates subit les assauts répétés d'une bande rivale, qui lui dispute un point d'eau. 
    La découverte d'un monolithe noir inspire au chef des singes assiégés un geste inédit et décisif. Brandissant un os, il passe à l'attaque et massacre ses adversaires. 
    Le premier instrument est né.
    En 2001, quatre millions d'années plus tard, un vaisseau spatial évolue en orbite lunaire au rythme langoureux du \"Beau Danube Bleu\". 
    A son bord, le Dr. Heywood Floyd enquête secrètement sur la découverte d'un monolithe noir qui émet d'étranges signaux vers Jupiter.
    Dix-huit mois plus tard, les astronautes David Bowman et Frank Poole font route vers Jupiter à bord du Discovery. 
    Les deux hommes vaquent sereinement à leurs tâches quotidiennes sous le contrôle de HAL 9000, un ordinateur exceptionnel doué d'intelligence et de parole. 
    Cependant, HAL, sans doute plus humain que ses maîtres, commence à donner des signes d'inquiétude : à quoi rime cette mission et que risque-t-on de découvrir sur Jupiter ?",
    $genre1,
    $realisateur2
);
$role6 = new Role('HAL', $acteur2);
$role7 = new Role('Bowman', $acteur1);
$casting3 = new Casting($film3, [
    [$role6, $acteur1],
    [$role7, $acteur2]
]);

$film4 = new Film(
    'Labyrinthe',
    '1986',
    101,
    'Une toute jeune fille romantique se sentant mal à l\'aise dans sa famille s\'évade en lisant des contes fantastiques. 
    Son livre favori "le Labyrinthe" lui ouvre une nuit les portes d\'un autre monde. Sarah voit son jeune frère, Toby, 
    enlevé par une troupe de lutins aux ordres du séduisant et cruel Jareth. Elle part au secours de l\'enfant et pénètre dans le labyrinthe qui mène au palais du ravisseur. 
    "Labyrinthe est à la fois un récit d\'aventures et une plongée dans les rêves et les sentiments d\'une jeune fille au seuil de la maturité',
    $genre2,
    $realisateur3
);
$role8 = new Role('Jareth');
$role9 = new Role('Sarah');
$role10 = new Role('Toby');
$casting1 = new Casting($film4, [
    [$role8, $acteur5],
    [$role9, $acteur4],
    [$role10, $acteur1]
]);
