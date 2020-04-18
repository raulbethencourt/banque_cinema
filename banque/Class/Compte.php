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
    protected $libelle;
    protected $solde;
    protected $devise_monetaire;
    
    /**
     * __construct function Its allows us recuperate data from class indentation
     * @param string $libelle
     * @param int $solde
     * @param string $devise_monetaire
     */
    public function __construct($libelle, $solde, $devise_monetaire)
    {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise_monetaire = $devise_monetaire;
    }

    /**
     * Get value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     *Se the value of libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of solde
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of devise_monetaire
     */
    public function getDevise_monetaire()
    {
        return $this->devise_monetaire;
    }

    /**
     * Set the value of devise_monetaire
     */
    public function setDevise_monetaire($devise_monetaire)
    {
        $this->devise_monetaire = $devise_monetaire;

        return $this;
    }

    /**
     * Its allows to credit in to the account
     * @param integer $amount
     */
    public function crediter($amount)
    {
       $this->solde += $amount;
    }

    /**
     * Its allows to debit amount from the account
     * @param int $amount
     */
    public function debiter($amount)
    {
        $this->solde -= $amount;
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
}
