<?php

use banque\Autoloading;
use banque\Compte;
use banque\Titulaire;
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

<body>
    <?php
    require 'Class/Autoloading.php';
    Autoloading::register();

    $c1 = new Compte();
    $t1 = new Titulaire();
    ?>
</body>

</html>