<?php

namespace cinema;

class Genre
{
    private $_type;
    private $_films;

    public function __construct(string  $type)
    {
        $this->_type = $type;
        $this->_films = [];
    }

    public function incluireFilmGenre($film)
    {
        $this->_films[] = $film;
    }
}