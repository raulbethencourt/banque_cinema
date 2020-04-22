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

//Set objects
$r1 = new Realisateur('Jodorowsky', 'Alejandro', '28-05-1983');
$r2 = new Realisateur('Kubrick', 'Stanley', '29-12-2019');

$a1 = new Acteur('Willies', 'Brouce', '10-04-1980');
$a2 = new Acteur('Pitt', 'Brad', '30-03-1975');
$a3 = new Acteur('Bacri', 'Jean-Pierre', '23-06-1995');

$g1 = new Genre('Science-fiction');

$c1 = new Casting([$a1]);

$f1 = new Film('El topo', '1970', 125, 'Hors-la-loi, El Topo défie pour l\'amour d\'une femme les Quatre Maîtres du Désert. 
    Les ayant vaincus, sa conscience s\'élève jusqu\'à ce que sa femme le trahisse. 
    Sa nouvelle vie d\'homme saint commence alors, et El Topo s\'engage dans la libération d\'une communauté de parias',
    $g1, $r1, $c1);

var_dump($c1);
var_dump($a1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exercise du cinema pour la formation chez Elan">
    <meta name="author" content="Raul Bethencourt Gonzalez">
    <meta name="keywords" content="cinema">
    <link rel="stylesheet" href="css/style.css">
    <title>Cinema</title>
</head>

<body>

</body>

</html>