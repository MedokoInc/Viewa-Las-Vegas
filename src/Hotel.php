<?php

namespace Medoko\Viewa;


class Hotel
{
    private $name;
    private $description;
    private $img;

    public function __construct($name, $description, $img)
    {
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
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

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }
}