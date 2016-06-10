<?php

namespace AydeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imputation
 *
 * @ORM\Table(name="imputation")
 * @ORM\Entity(repositoryClass="AydeBundle\Repository\ImputationRepository")
 */
class Imputation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
     
    /**
     * @var Project
     *
     * @ORM\OneToOne(targetEntity="Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     * @var float
     *
     * @ORM\Column(name="dedication", type="float")
     */
    private $dedication;



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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Imputation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dedication
     *
     * @param string $dedication
     *
     * @return Imputation
     */
    public function setDedication($dedication)
    {
        $this->dedication = $dedication;

        return $this;
    }

    /**
     * Get dedication
     *
     * @return string
     */
    public function getDedication()
    {
        return $this->dedication;
    }

    /**
     * Set user
     *
     * @param \AydeBundle\Entity\User $user
     *
     * @return Imputation
     */
    public function setUser(\AydeBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AydeBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set project
     *
     * @param \AydeBundle\Entity\Project $project
     *
     * @return Imputation
     */
    public function setProject(\AydeBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \AydeBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }
}
