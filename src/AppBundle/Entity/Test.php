<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestRepository")
 */
class Test
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OrderBy({"result_at" = "DESC"})
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_at", type="datetime")
     */
    private $dateAt;

/**
     * @var \DateTime
     *
     * @ORM\Column(name="result_at", type="datetime")
     */
    private $resultAt;

    /**
     * @var int
     *
     * @ORM\Column(name="days", type="integer")
     */
    private $days;

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
     * Set dateAt
     *
     * @param \DateTime $dateAt
     *
     * @return Test
     */
    public function setDateAt($dateAt)
    {
        $this->dateAt = $dateAt;

        return $this;
    }

    /**
     * Get dateAt
     *
     * @return \DateTime
     */
    public function getDateAt()
    {
        return $this->dateAt;
    }

    /**
     * Get dateAt
     *
     * @return \DateTime
     */
    public function getResultAt()
    {
        return $this->resultAt;
    }

    /**
     * Set resultAt
     *
     * @param \DateTime $resultAt
     *
     * @return Test
     */
    public function setResultAt($resultAt)
    {
        $this->resultAt = $resultAt;

        return $this;
    }

    /**
     * Set days
     *
     * @param integer $days
     *
     * @return Test
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }
}

