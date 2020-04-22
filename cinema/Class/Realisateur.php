<?php

namespace cinema;

final class Realisateur extends Personne
{
    private $_films;

    public function __construct(string $nom, string $prenom, string $date_naissance)
    {
        parent::__construct($nom, $prenom, $date_naissance);
        $this->_films = [];
    }

    public function incluireFilmRealisateur($film)
    {
        $this->_films[] = $film;
    }

    /**
     * Get the value of _films
     */
    public function get_films()
    {
        foreach ($this->_films as $films) {
            return $films->get_titre() . " ";
        }
    }
}
