<?php
//Class I'm going to use
use banque\Autoloading;
use banque\Compte;
use banque\Titulaire;

//Calls Class Autoloading
require_once 'Class/Autoloading.php';
Autoloading::register();

//Set account beneficiary 
$t1 = new Titulaire('Blissett', 'Luther', '28-05-1983', 'La Laguna');
$t2 = new Titulaire('Difool', 'John', '29-12-1982', 'Lille');

//Set beneficiary accounts
$c1_t1 = new Compte('livret A', 0, '€', $t1);
$c2_t1 = new Compte('PEL', 75, '€', $t1);
$c3_t1 = new Compte('compte courant', 1000, '€', $t1);

$c1_t2 = new Compte('livret A', 25, '€', $t2);
$c2_t2 = new Compte('comte courant', 0, '€', $t2);   

//I try my methods 
$c1_t2->virement(25, $c1_t1);
$c1_t1->crediter(50);
$c1_t1->debiter(50);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exercise de la banque pour la formation chez Elan">
    <meta name="author" content="Raul Bethencourt Gonzalez">
    <meta name="keywords" content="banque">
    <link rel="stylesheet" href="css/style.css">
</head>

<!--I creates two tables with and accounts infos-->
<body>

    <?php $t1->getTitulaireInfos(); ?>
    <?php $c1_t1->getComptesInfos(); ?>
    <?php $t2->getTitulaireInfos(); ?>
    <?php $c1_t2->getComptesInfos(); ?>

</body>

</html>