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
}
