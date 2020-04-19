<?php

namespace banque;

/**
 * class Compte
 */
class Compte
{
    /**
     * Data variables for the class
     * @var [string, int]
     */
    protected $_libelle;
    protected $_solde;
    protected $_devise_monetaire;
    protected $_titulaire;
    /**
     * __construct function Its allows us recuperate data from class indentation
     * @param string $libelle
     * @param int $solde
     * @param string $devise_monetaire
     */
    public function __construct($libelle, $solde, $devise_monetaire, $titulaire)
    {
        $this->_libelle             = $libelle;
        $this->_solde               = $solde;
        $this->_devise_monetaire    = $devise_monetaire;
        $this->_titulaire           = $titulaire;
        $titulaire->incluireCompte($this);
    }

    /**
     * Get value of libelle
     */
    public function getLibelle()
    {
        return $this->_libelle;
    }

    /**
     *Se the value of libelle
     */
    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of solde
     */
    public function getSolde()
    {
        return $this->_solde;
    }

    /**
     * Set the value of solde
     */
    public function setSolde($solde)
    {
        $this->_solde = $solde;

        return $this;
    }

    /**
     * Get the value of devise_monetaire
     */
    public function getDevise_monetaire()
    {
        return $this->_devise_monetaire;
    }

    /**
     * Set the value of devise_monetaire
     */
    public function setDevise_monetaire($devise_monetaire)
    {
        $this->_devise_monetaire = $devise_monetaire;

        return $this;
    }

    /**
     * Its allows to credit in to the account
     * @param integer $amount
     */
    public function crediter($amount)
    {
        $this->_solde += $amount;
    }

    /**
     * Its allows to debit amount from the account
     * @param int $amount
     */
    public function debiter($amount)
    {
        $this->_solde -= $amount;
    }

    /**
     *Its allows to transfer un amount from un account to another
     * @param int $amount
     */
    public function virement($amount, $debiteur)
    {
        $this->debiter($amount);
        $debiteur->crediter($amount);
    }

    public function getComptesInfos()
    {
        echo "<h2>COMPTE</h2>";
        echo "<table>";
        echo "    <tr>";
        echo "        <th>LIBELLE</th>";
        echo "        <th>SOLDE</th>";
        echo "        <th>DEVISE MONETAIRE</th>";
        echo "    </tr>";
        echo "    <tr>";
        echo "        <th>" . $this->_libelle . "</th>";
        echo "        <th>" . $this->_solde . "</th>";
        echo "        <th>" . $this->_devise_monetaire . "</th>";
        echo "    </tr>";
        echo "    <tr>";
        echo "        <th>TITULAIRE</th>";
        echo "    </tr>";
        echo "    <tr>";
        echo "        <th>" . $this->_titulaire . "</th>";
        echo "    </tr>";
        echo "</table>";
    }
}
