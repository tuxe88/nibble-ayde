<?php

namespace AydeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AydeBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=15, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mensualCharge", type="float")
     */
    private $mensualCharge;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mensualCharge
     *
     * @param string $mensualCharge
     *
     * @return User
     */
    public function setMensualCharge($mensualCharge)
    {
        $this->mensualCharge = $mensualCharge;

        return $this;
    }

    /**
     * Get mensualCharge
     *
     * @return string
     */
    public function getMensualCharge()
    {
        return $this->mensualCharge;
    }
}
