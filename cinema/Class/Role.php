<?php

namespace cinema;

/**
 * This class set Roles details
 */
class Role
{
    /**
     * All class data
     */
    private $_nom_role;
    private $_film;
    private $_acteur;

    /**
     * Function __construct
     * Allows to pass parameters on object construction
     * @param string $nom_role
     */
    public function __construct(string $nom_role)
    {
        $this->_acteur      = [];
        $this->_film        = [];
        $this->_nom_role    = $nom_role;
    }

    /**
     * Get the value of _nom_role
     */
    public function get_nom_role()
    {
        return $this->_nom_role;
    }

    /**
     * Get the value of _film
     */ 
    public function get_film()
    {
        return $this->_film;
    }

    /**
     * Get the value of _acteur
     */ 
    public function get_acteur()
    {
        return $this->_acteur;
    }

    /**
     * This function includes Film into $_film 
     * @param [Film] $film
     */
    public function incluireFilm($film)
    {
        $this->_film[] = $film; 
    }

    /**
     * This function includes Acteur int $_acteur
     * @param [Acteur] $acteur
     */
    public function incluireActeur($acteur)
    {
        $this->_acteur[] = $acteur;
    }
    
    /**
     * This function displays actors info about his films and roles played
     */
    public function setActeurs()
    {
        echo "<h2>Le role \"". $this->get_nom_role()."\" à été encarnée pour:";
        echo "<ul>";
        foreach ($this->get_acteur() as $acteur) {
            echo "<li>". $acteur ." dans le film "; 
            foreach ($this->_film as $film) {
                echo $film->get_titre();       
            }   
            echo ".</li>";
        }
        echo "</ul>";
    }

   
}