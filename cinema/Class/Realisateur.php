<?php

namespace cinema;

/**
 * This class set the Directors and extends from class Personne
 */
final class Realisateur extends Personne
{
    /**
     * Directors films and roles
     * @var [Film]
     * @var [Role]
     */
    private $_films;
    private $_roles;

    /**
     * Allows to pass parameters on object construction
     * @param string $nom
     * @param string $prenom
     * @param string $date_naissance
     */
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

    /**
     * This function get Film class into Ralisateur
     */
    public function incluireFilm($film)
    {
        $this->_films[] = $film;
    }

    /**
     * Set the roles of directors if he plays character 
     */
    public function incluireRole($role)
    {
        $this->_roles[] = $role;
    }

    /**
     * This function display directors roles info as actor
     * @return [HTML]
     */
    public function setFilmsRoles()
    {
        echo "<h2>Les filmes du $this comme acteur</h2>";
        echo "<ul>";
        foreach ($this->get_roles() as $role) {
            echo "<li>";
            foreach ($role->get_film() as $film) {
                echo $film->get_titre();
            }
            echo " dans le role de \"" . $role->get_nom_role() . "\".";
            echo "</li>";
        }
        echo "</ul>";
    }

    /**
     * This function display directors films as director
     * @return [HTML]
     */
    public function setFilms()
    {
        echo "<h2>Les filmes du $this</h2>";
        echo "<ul>";
        foreach ($this->get_films() as $film) {
            echo "<li>".$film->get_titre().".</li>";
        }
        echo "</ul>";
    }

   
}
