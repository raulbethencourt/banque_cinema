<?php

namespace cinema;

abstract class Personne
{
    private $_nom;
    private $_prenom;
    private $_date_naissance;

    public function __construct(string $nom, string $prenom, string $date_naissance)
    {
        $this->_nom             = $nom;
        $this->_prenom          = $prenom;
        $this->_date_naissance  = $date_naissance;
    }

    public function __toString()
    {
        return $this->_prenom. " ($this->_nom)";
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
        return $this->_date_naissance;
    }
}

