<?php

namespace cinema;

final class Acteur extends Personne
{
    private $_films;
    private $_roles;
    
    public function __construct(string $nom, string $prenom, string $date_naissance)
    {
        parent::__construct($nom, $prenom, $date_naissance);
        $this->_films = []; 
        $this->_roles = [];
    }  

    /**
     * Get the value of _films
     */ 
    public function get_films()
    {
        return $this->_films;
    }

    /**
     * Get the value of _roles
     */ 
    public function get_roles()
    {
        return $this->_roles;
    }

    public function incluireFilmActeur($film)
    {
        $this->_films[] = $film;
    }
}