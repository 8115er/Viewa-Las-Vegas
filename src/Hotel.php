<?php

namespace Oscorp\ViewaLasVegas;

class Hotel
{
    private $name;
    private $stars;
    private $description;
    private $mainPicture;
    private $secondaryPictures;

    /**
     * @param $name
     * @param $stars
     */
    public function __construct($name, $description, $stars, $mainPicture, $secondaryPictures)
    {
        $this->name = $name;
        $this->description = $description;
        $this->stars = $stars;
        $this->mainPicture = mainPicture;
        $this->secondaryPictures = $secondaryPictures;
    }

    /**
     * @return mixed
     */
    public function getSecondaryPictures()
    {
        return $this->secondaryPictures;
    }

    /**
     * @return mixed
     */
    public function getMainPicture()
    {
        return $this->mainPicture;
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