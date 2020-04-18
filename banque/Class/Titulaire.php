<?php

namespace banque;

class Titulaire
{
    /**
     * List of data for the class
     * @var string date 
     */
    protected $nom;
    protected $prenom;
    protected $date_naissance;
    protected $ville;
    protected $comptes;

    /**
     * __construct function 
     * Its allows us recuperate data from class indentation
     * @param string $nom
     * @param string $prenom
     * @param string $date_naissance
     * @param string $ville
     * @param array $comptes
     */
    public function __construct($nom, $prenom, $date_naissance, $ville, $comptes)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->ville = $ville;
        $this->comptes = $comptes;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of date_naissance
     */
    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set the value of date_naissance
     */
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of comptes
     */
    public function getComptes()
    {
        foreach($this->comptes as $compte){
            echo $compte->getLibelle() ." ";
        }
    }

    /**
     * Set the value of comptes
     */
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }

    /**
     *Calcul the beneficiary age
     * @return int
     */
    public function age()
    {
        $date = date("Y-m-d");
        $age = date_diff(date_create($this->date_naissance), date_create($date));
        return $age->format('%y');
    }

    public function getTitulaireInfos()
    {
        echo "<h2>TITULAIRE</h2>";
        echo "<table>";
            echo "<tr>";
                echo "<th>NOM</th>";
                echo "<th>PRENOM</th>";
                echo "<th>DATE DE NAISSANCE</th>";
            echo "</tr>";
                    echo "<tr>";
                    echo "<th>" . $this->getNom() . "</th>";
                    echo "<th>" . $this->getPrenom() . "</th>";
                echo "<th>" . $this->getDate_naissance() . "</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>AGE</th>";
                echo "<th>VILLE</th>";
                echo "<th>COMPTES</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<th>" . $this->age() . "</th>";
                echo "<th>" . $this->getVille() . "</th>";
                echo "<th>" . $this->getComptes() . "</th>";
            echo " </tr>";
        echo "</table>";
    }
}
