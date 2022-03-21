<?php

namespace Medoko\Viewa;


class Hotel
{
    private $name;
    private $description;
    private $img;
    private $url;

    public function __construct($name, $description, $img, $url)
    {
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
        $this->url = $url;
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

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function getArray()
    {
        return ['NAME'=>$this->name,'DESCRIPTION'=>$this->description,'IMG'=>$this->img,'URL'=>$this->url];
    }
}