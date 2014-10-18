<?php

class Section {
    private $html;
    private $title;
    private $transition;

    public function __construct($title, $html, $transition) {
        $this->title = $title;
        $this->html = $html;
        $this->transition = $transition;
    }


    public function getHtml()
    {
        return $this->html;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTransition()
    {
        return $this->transition;
    }

} 