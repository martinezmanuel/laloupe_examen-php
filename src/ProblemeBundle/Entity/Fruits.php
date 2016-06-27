<?php

namespace ProblemeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fruits
 */
class Fruits
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $fruit;


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
     * Set fruit
     *
     * @param string $fruit
     * @return Fruits
     */
    public function setFruit($fruit)
    {
        $this->fruit = $fruit;

        return $this;
    }

    /**
     * Get fruit
     *
     * @return string 
     */
    public function getFruit()
    {
        return $this->fruit;
    }
}
