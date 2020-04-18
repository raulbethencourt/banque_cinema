<?php
//Class I'm going to use
use banque\Autoloading;
use banque\Compte;
use banque\Titulaire;

//Calls Class Autoloading
require_once 'Class/Autoloading.php';
Autoloading::register();

//Set first account beneficiary whit his accounts
$t1 = new Titulaire('Blissett', 'Luther', '28-05-1983', 'La Laguna', [
    $c1_t1 = new Compte('livret A', 0, '€'),
    $c2_t1 = new Compte('PEL', 75, '€'),
    $c3_t1 = new Compte('compte courant', 1000, '€')
]);

//Set second account beneficiary whit his accounts
$t2 = new Titulaire('Difool', 'John', '29-12-1982', 'Lille', [
    $c1_t2 = new Compte('livret A', 25, '€'),
    $c2_t2 = new Compte('comte courant', 0, '€')
]);

//I try my methods 
$c1_t2->virement(25, $c1_t1);
$c1_t1->crediter(50);
$c1_t1->debiter(50);

var_dump($t1->getComptes());

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

<!--I creates tables with all beneficiaries and accounts infos-->
<body>

    <?php $t1->getTitulaireInfos(); ?>

    <h2>COMPTE</h2>
    <table>
        <tr>
            <th>LIBELLE</th>
            <th>SOLDE</th>
            <th>DEVISE MONETAIRE</th>
        </tr>
        <tr>
            <th><?php echo $c1_t1->getLibelle(); ?></th>
            <th><?php echo $c1_t1->getSolde(); ?></th>
            <th><?php echo $c1_t1->getDevise_monetaire(); ?></th>
        </tr>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
        </tr>
        <tr>
            <th><?php echo $t1->getNom(); ?></th>
            <th><?php echo $t1->getPrenom(); ?></th>
        </tr>
    </table>

</body>

</html>