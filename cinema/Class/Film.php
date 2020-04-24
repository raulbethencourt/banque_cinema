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
     */
    public function __construct(string $titre, string $sortie, int $duree, string $synopsis, Genre $genre, Realisateur $realisateur)
    {
        $this->_titre       = $titre;
        $this->_sortie      = $sortie;
        $this->_duree       = $duree;
        $this->_synopsis    = $synopsis;
        $this->_genre       = $genre;
        $this->_realisateur = $realisateur;
        $this->_casting     = [];
        $realisateur->incluireFilm($this);
        $genre->incluireFilm($this); 
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
     * Get the value of _realisateur
     */ 
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    /**
     * This function includes Casting into $_casting
     * @param [Casting] $casting
     */
    public function incluireCasting($casting)
    {
        $this->_casting[] = $casting;
    }
    
    /**
     * This function displays a table with all film information
     * @return [HTML]
     */
    public function setFilm()
    {
        echo "<table>";
        echo "  <tr>";
        echo "      <th>TITRE</th>";
        echo "      <th>DATE SORTIE</th>";
        echo "      <th>DUREE</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>" . $this->_titre . "</th>";
        echo "      <th>" . $this->_sortie . "</th>";
        echo "      <th>" . $this->_duree . " minutes</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>SYNOPSIS</th>";
        echo "      <th>GENRE</th>";
        echo "      <th>REALISATEUR</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>" . $this->_synopsis . "</th>";
        echo "      <th>" . $this->_genre->get_type() . "</th>";
        echo "      <th>" . $this->_realisateur . "</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>ACTEURS</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>";
        foreach ($this->_casting as $casting) {
            $casting->get_role_acteur();
            foreach ($casting->get_role_acteur()  as $acteur) {
                echo $acteur[1].", ";
            }
        }
        echo "      </th>";
        echo "  </tr>";
        echo "</table>";
    }
}