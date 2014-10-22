<?php

class Header extends Element {

    private $title;
    private $menu;
    private $headerColor;
    private $headerTextColor;
    private $navTextColor;
    private $navTextHoverColor;

    public function __construct() {
        $this->start = '<header>';
        $this->end = '</header>';

        // Set test data
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

    public function getMenu()
    {
        $html = '<nav><ul>';
        foreach($this->menu as $text => $link) {
            $html .= '<li><a href="' . $link . '">' . $text . '</a></li>';
        }
        $html .= '</ul></nav>';
        return $html;
    }

    public function getTitle()
    {
        return '<h1>' . $this->title . '</h1>';
    }

    public function getNavTextColor()
    {
        return $this->navTextColor;
    }

    public function getNavTextHoverColor()
    {
        return $this->navTextHoverColor;
    }

    public function getHeaderColor()
    {
        return $this->headerColor;
    }

    public function getHeaderTextColor()
    {
        return $this->headerTextColor;
    }

} 