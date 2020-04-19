<?php

namespace banque;

/**
 * Class to set beneficiary's
 */
class Titulaire
{
    /**
     * List of data for the class
     * @var string date 
     */
    protected $_nom;
    protected $_prenom;
    protected $_date_naissance;
    protected $_ville;
    protected $_comptes;

    /**
     * __construct function 
     * Its allows us recuperate data from class indentation
     * @param string $nom
     * @param string $prenom
     * @param string $date_naissance
     * @param string $ville
     * @param array $comptes
     */
    public function __construct($nom, $prenom, $date_naissance, $ville)
    {
        $this->_nom              = $nom;
        $this->_prenom           = $prenom;
        $this->_date_naissance   = $date_naissance;
        $this->_ville            = $ville;
        $this->_comptes          = [];
    }

    /**
     * We set name and surname together 
     */
    public function __toString()
    {
        return $this->_prenom . " " . $this->_nom;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of date_naissance
     */
    public function getDate_naissance()
    {
        return $this->_date_naissance;
    }

    /**
     * Set the value of date_naissance
     */
    public function setDate_naissance($date_naissance)
    {
        $this->_date_naissance = $date_naissance;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->_ville;
    }

    /**
     * Set the value of ville
     */
    public function setVille($ville)
    {
        $this->_ville = $ville;

        return $this;
    }

    /**
     * Get the value of comptes
     */
    public function getComptes()
    {
        foreach ($this->_comptes as $compte) {
            echo $compte->getLibelle() . " ";
        }
    }

    /**
     * Set the value of comptes
     */
    public function setComptes($comptes)
    {
        $this->_comptes = $comptes;

        return $this;
    }

    /**
     *Calcul the beneficiary age
     * @return int
     */
    public function age()
    {
        $date = date("Y-m-d");
        $age = date_diff(date_create($this->_date_naissance), date_create($date));
        return $age->format('%y');
    }

    /**
     * This function allows to attach un account to his owner
     */
    public function incluireCompte($compt)
    {
        $this->_comptes[] = $compt;
    }

    /**
     * This function set infos table for beneficiary 
     */
    public function getTitulaireInfos()
    {
        echo "<h2>$this</h2>";
        echo "<table>";
        echo "  <tr>";
        echo "      <th>NOM</th>";
        echo "      <th>PRENOM</th>";
        echo "      <th>DATE DE NAISSANCE</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>" . $this->_nom . "</th>";
        echo "      <th>" . $this->_prenom . "</th>";
        echo "      <th>" . $this->_date_naissance . "</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>AGE</th>";
        echo "      <th>VILLE</th>";
        echo "      <th>COMPTES</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <th>" . $this->age() . "</th>";
        echo "      <th>" . $this->_ville . "</th>";
        echo "      <th>" . $this->getComptes() . "</th>";
        echo "  </tr>";
        echo "</table>";
    }
}
