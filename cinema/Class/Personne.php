<?php

namespace cinema;

/**
 * This class creates generic data for people
 */
abstract class Personne
{
    /**
     * All class data
     */
    private $_nom;
    private $_prenom;
    private $_date_naissance;

    /**
     * Function __construct
     * Allows to pass parameters on object construction
     * @param string $nom
     * @param string $prenom
     * @param string $date_naissance
     */
    public function __construct($nom, $prenom, string $date_naissance)
    {
        $this->_nom             = $nom;
        $this->_prenom          = $prenom;
        $this->_date_naissance  = $date_naissance;
    }

    /**
     * This function transforms into one string $prenom + $nom
     * @return string
     */
    public function __toString()
    {
        return $this->get_prenom() . " " . $this->get_nom();;
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Get the value of _date_naissance
     */ 
    public function get_date_naissance()
    {
        return $this->_date_naissance->format('d/m/Y');
    }
}

