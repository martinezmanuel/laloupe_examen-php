<?php

namespace ProblemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $client;
    
    private $consomation_de_banane;
    
    private $consomation_de_pomme;
    
    private $consomation_ananas;
    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set client
     *
     * @param string $client
     * @return Client
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set consomation_de_banane
     *
     * @param integer $consomationDeBanane
     * @return Client
     */
    public function setConsomationDeBanane($consomationDeBanane)
    {
        $this->consomation_de_banane = $consomationDeBanane;

        return $this;
    }

    /**
     * Get consomation_de_banane
     *
     * @return integer 
     */
    public function getConsomationDeBanane()
    {
        return $this->consomation_de_banane;
    }

    /**
     * Set consomation_de_pomme
     *
     * @param integer $consomationDePomme
     * @return Client
     */
    public function setConsomationDePomme($consomationDePomme)
    {
        $this->consomation_de_pomme = $consomationDePomme;

        return $this;
    }

    /**
     * Get consomation_de_pomme
     *
     * @return integer 
     */
    public function getConsomationDePomme()
    {
        return $this->consomation_de_pomme;
    }

    /**
     * Set consomation_ananas
     *
     * @param integer $consomationAnanas
     * @return Client
     */
    public function setConsomationAnanas($consomationAnanas)
    {
        $this->consomation_ananas = $consomationAnanas;

        return $this;
    }

    /**
     * Get consomation_ananas
     *
     * @return integer 
     */
    public function getConsomationAnanas()
    {
        return $this->consomation_ananas;
    }
}
