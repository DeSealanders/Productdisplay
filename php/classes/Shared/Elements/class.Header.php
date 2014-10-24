<?php

class Header extends Element {

    private $title;
    private $menu;
    private $headerColor;
    private $headerTextColor;
    private $navTextColor;
    private $navTextHoverColor;

    public function __construct() {
        $this->startHtml = '<header>';
        $this->endHtml = '</header>';

        $data = DataProvider::getInstance()->getHeaderData();

        // Header data
        $this->title = $data['headerData']['title'];
        $this->headerColor = $data['headerData']['headerColor'];
        $this->headerTextColor = $data['headerData']['headerTextColor'];
        $this->navTextColor = $data['headerData']['navTextColor'];
        $this->navTextHoverColor = $data['headerData']['navTextHoverColor'];

        // Menu data
        $this->menu = array();
        if(count($data['menuData']) > 0) {
            foreach($data['menuData'] as $menuItem) {
                $this->menu[$menuItem['text']] = $menuItem['link'];
            }
        }
    }

    public function getMenuHtml()
    {
        $html = '<nav><ul>';
        foreach($this->menu as $text => $link) {
            $html .= '<li><a href="' . $link . '">' . $text . '</a></li>';
        }
        $html .= '</ul></nav>';
        return $html;
    }

    public function getTitleHtml()
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