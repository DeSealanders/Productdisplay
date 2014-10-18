<?php

class Header {

    private $title;
    private $menu;
    private $headerColor;
    private $headerTextColor;
    private $navTextColor;
    private $navTextHoverColor;

    public function __construct() {
        $this->title = 'Dit is een test';
        $this->menu = array(
                'Fred' => '#Fred',
                'Piet' => '#Piet',
                'Anita' => '#Anita',
            );
        $this->headerColor = 'white';
        $this->headerTextColor = 'darkorange';
        $this->navTextColor = 'gray';
        $this->navTextHoverColor = 'lightgray';
    }

    public function getHeaderColor()
    {
        return $this->headerColor;
    }

    public function getHeaderTextColor()
    {
        return $this->headerTextColor;
    }

    public function getMenu()
    {
        return $this->menu;
    }

    public function getNavTextColor()
    {
        return $this->navTextColor;
    }

    public function getNavTextHoverColor()
    {
        return $this->navTextHoverColor;
    }

    public function getTitle()
    {
        return $this->title;
    }

} 