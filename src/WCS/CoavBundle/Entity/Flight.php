<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 *
 * @ORM\Table(name="flight")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\FlightRepository")
 */
class Flight
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
     * @ORM\Column(name="departure", type="string", length=4)
     */
    private $departure;

    /**
     * @var string
     *
     * @ORM\Column(name="arrival", type="string", length=4)
     */
    private $arrival;

    /**
     * @var string
     *
     * @ORM\Column(name="pilot", type="string", length=255)
     */
    private $pilot;

    /**
     * @var int
     *
     * @ORM\Column(name="freeSeats", type="integer")
     */
    private $freeSeats;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="takeOfTime", type="datetime")
     */
    private $takeOfTime;


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
     * Set departure
     *
     * @param string $departure
     *
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     *
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     *
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     *
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return int
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeOfTime
     *
     * @param \DateTime $takeOfTime
     *
     * @return Flight
     */
    public function setTakeOfTime($takeOfTime)
    {
        $this->takeOfTime = $takeOfTime;

        return $this;
    }

    /**
     * Get takeOfTime
     *
     * @return \DateTime
     */
    public function getTakeOfTime()
    {
        return $this->takeOfTime;
    }
}

