<?php

//I call all my data
require "data/data.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Exercise du cinema pour la formation chez Elan">
    <meta name="author" content="Raul Bethencourt Gonzalez">
    <meta name="keywords" content="cinema">
    <link rel="stylesheet" href="css/style.css">
    <title>Cinema</title>
</head>

<body>
    <!-- I set all info -->
    <?= $realisateur1->setFilms(); ?>
    <?= $realisateur1->setFilmsRoles() ?>
    <?= $realisateur2->setFilms(); ?>
    <?= $realisateur3->setFilms(); ?>

    <?= $acteur1->setFilmsRoles(); ?>
    <?= $acteur2->setFilmsRoles(); ?>
    <?= $acteur3->setFilmsRoles(); ?>
    <?= $acteur4->setFilmsRoles(); ?>
    <?= $acteur5->setFilmsRoles(); ?>

    <?= $genre1->setGenre(); ?>
    <?= $genre2->setGenre(); ?>

    <?= $role1->setActeurs(); ?>
    <?= $role2->setActeurs(); ?>
    <?= $role3->setActeurs(); ?>
    <?= $role4->setActeurs(); ?>
    <?= $role5->setActeurs(); ?>
    <?= $role6->setActeurs(); ?>
    <?= $role7->setActeurs(); ?>
    <?= $role8->setActeurs(); ?>
    <?= $role9->setActeurs(); ?>
    <?= $role10->setActeurs(); ?>

    <?= $film1->setFilm(); ?>
    <?= $film2->setFilm(); ?>
    <?= $film3->setFilm(); ?>
    <?= $film4->setFilm(); ?>
</body>

</html>