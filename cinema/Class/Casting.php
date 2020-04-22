<?php

namespace cinema;

class Casting
{
    private $_film;
    private $_acteurs;

    public function __construct($acteurs)
    {
        $this->_film;
        $this->_acteurs = $acteurs;
        foreach ($this->_acteurs as $acteur) {
            $acteur->incluireFilmActeur($this->_film);
        }
    }

    public function incluireFilmCasting($film)
    {
        $this->_film = $film;
    }
}