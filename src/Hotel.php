<?php

namespace Oscorp\ViewaLasVegas;

class Hotel
{

    private $name;
    private $stars;
    private $description;

    /**
     * @param $name
     * @param $stars
     */
    public function __construct($name, $description, $stars)
    {
        $this->name = $name;
        $this->description = $description;
        $this->stars = $stars;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


}