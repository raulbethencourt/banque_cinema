<?php

namespace cinema;

/**
 * This class set the Actors and extends from class Personne 
 */
final class Acteur extends Personne
{
    /**
     * Actors roles
     * @var [Role]
     */
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
        $this->_roles = [];
    }

    /**
     * Get the value of _roles
     */
    public function get_roles()
    {
        return $this->_roles;
    }

    /**
     * This function includes Role into $_roles
     * @param [Role] $role
     */
    public function incluireRole($role)
    {
        $this->_roles[] = $role;
    }

    /**
     * This function display actors info, 
     * like films and roles
     * @return [HTML]
     */
    public function setFilmsRoles()
    {
        echo "<h2>Les filmes du $this</h2>";
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
     * This function display actors info, 
     * like roles and films
     * @return [HTML]
     */
    public function setRolesFilm()
    {
        echo "<h2>Les roles du $this</h2>";
        echo "<ul>";
        foreach ($this->get_roles() as $role) {
            echo "<li>". $role->get_nom_role() ." dans le film "; 
            foreach ($role->get_film() as $film) {
                echo $film->get_titre();
            }   
            echo ".</li>";
        }
        echo "</ul>";
    }
}
