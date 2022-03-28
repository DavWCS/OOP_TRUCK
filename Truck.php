<?php

require_once 'Vehicle.php';

class Truck extends Vehicle{

    public function __construct(private int $filling, protected string $color, protected int $nbSeats, protected string $energy)
    {
        parent:: __construct($color,$nbSeats);
        $this->setEnergy($energy);
    }
    private int $loadingCapacity = 4000;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {   
        if(in_array($energy,self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoadingCapcity(): int
    {
        return $this->loadingCapacity;
    }
    public function setLoadingCapacity(int $LoadingCapacity): void
    {
        $this->LoadingCapacity = $LoadingCapacity;
    }

    public function getFilling(): int
    {
        return $this->filling;
    }

    public function setFilling(int $filling): void
    {
        $this->filling += $filling;
    }

    public function is_Loaded(): string
    {
        $sentence = '';
        if($this->filling < $this->loadingCapacity)
        {
            $sentence = 'in filling';
        } else {
            $sentence = 'full';
        }
        return $sentence;
    }
}