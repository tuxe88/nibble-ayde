<?php

namespace AydeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AydeBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="name", type="string", length=20, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="valuePerHour", type="integer")
     */
    private $valuePerHour;


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
     * @return Project
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
     * Set valuePerHour
     *
     * @param integer $valuePerHour
     *
     * @return Project
     */
    public function setValuePerHour($valuePerHour)
    {
        $this->valuePerHour = $valuePerHour;

        return $this;
    }

    /**
     * Get valuePerHour
     *
     * @return int
     */
    public function getValuePerHour()
    {
        return $this->valuePerHour;
    }
}

