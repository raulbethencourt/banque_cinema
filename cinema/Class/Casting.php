<?php

namespace cinema;

/**
 * This class set the casting details
 */
class Casting
{
    /**
     * All class data
     */
    private $_film;
    private $_role_acteur;

    /**
     * Function __construct
     * Allows to pass parameters on object construction and to send info to other classes
     * @param Film $film
     * @param [array] $role_acteur
     */
    public function __construct(Film $film, $role_acteur)
    {
        $this->_film        = $film;
        $this->_role_acteur = $role_acteur;
        $film->incluireCasting($this);
        foreach ($role_acteur as $acteur_role) {
            $acteur_role[0]->incluireFilm($film);
        }
        foreach ($role_acteur as $acteur_role) {
            $acteur_role[1]->incluireRole($acteur_role[0]);
            $acteur_role[0]->incluireActeur($acteur_role[1]);
        }
    }   

    /**
     * Get the value of _role_acteur
     */ 
    public function get_role_acteur()
    {
        return $this->_role_acteur;
    }
}