<?php

namespace Oscorp\ViewaLasVegas;

class Hotel
{

    private $name;
    private $stars;
    private $description;
    private $mainImg;
    private $img1;
    private $img2;

    /**
     * @param $name
     * @param $stars
     * @param $description
     * @param $img1
     * @param $img2
     */
    public function __construct($name, $stars, $description, $img1, $img2, $mainImg)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->description = $description;
        $this->img1 = $img1;
        $this->img2 = $img2;
        $this->mainImg = $mainImg;

    }

    /**
     * @return string
     */
    public function getMainImg()
    {
        return $this->mainImg;
    }

    /**
     * @return mixed
     */
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * @return mixed
     */
    public function getImg2()
    {
        return $this->img2;
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