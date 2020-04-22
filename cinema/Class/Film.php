<?php

namespace cinema;

/**
 * This class set the film details 
 */
class Film
{
    /**
     * All class data
     */
    private $_titre;
    private $_sortie;
    private $_duree;
    private $_synopsis;
    private $_genre;
    private $_realisateur;
    private $_casting;

    /**
     * Function __construct
     * Allows to pass parameters on object construction
     * @param string $titre
     * @param string $sortie
     * @param integer $duree
     * @param string $synopsis
     * @param mixed $realisateur
     * @param mixed $casting
     */
    public function __construct(string $titre, string $sortie, int $duree, string $synopsis, Genre $genre, Realisateur $realisateur, Casting $casting)
    {
        $this->_titre       = $titre;
        $this->_sortie      = $sortie;
        $this->_duree       = $duree;
        $this->_synopsis    = $synopsis;
        $this->_genre       = $genre;
        $this->_realisateur = $realisateur;
        $this->_casting     = $casting;
        $realisateur->incluireFilmRealisateur($this);
        $genre->incluireFilmGenre($this);
        $casting->incluireFilmCasting($this);
    }

    /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Get the value of _sortie
     */ 
    public function get_sortie()
    {
        return $this->_sortie;
    }

    /**
     * Get the value of _duree
     */ 
    public function get_duree()
    {
        return $this->_duree;
    }

    /**
     * Get the value of _synopsis
     */ 
    public function get_synopsis()
    {
        return $this->_synopsis;
    }

    /**
     * Set the value of _synopsis
     * @return  self
     */ 
    public function set_synopsis(string $_synopsis)
    {
        $this->_synopsis = $_synopsis;

        return $this;
    }

    /**
     * Get the value of _realisateur
     */ 
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

     /**
     * Get the value of _acteurs
     */ 
    public function get_acteurs()
    {
        return $this->_acteurs;
    }

    public function setFilm( $film)
    {
        
    }

   
}