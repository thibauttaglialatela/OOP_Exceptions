<?php

//Car.php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    private bool $hasParkBrake;

    public const ALLOWED_ENERGY = [
        'fuel',
        'electric'
    ];

    private string $energy;
    private int $energylevel;

    //Constructeur de la classe Car

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    //Méthodes de la classe

    /**
     * Start the car
     */

    public function start()
    {
        if ($this->setParkBrake(true)) {
            throw new Exception('There is the brake');

        } else {
            echo "The car starts";
        }
        
    }

    /**
     * GETTERS & setters
     */

    /**
     * Get the value of energy
     */
    public function getEnergy()
    {
        return $this->energy;
    }



    /**
     * Get the value of energylevel
     */
    public function getEnergylevel()
    {
        return $this->energylevel;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }


    /**
     * Set the value of energylevel
     *
     * @return  self
     */
    public function setEnergylevel(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGY)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}
