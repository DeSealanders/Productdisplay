<?php

class Element {
    protected $startHtml;
    protected $endHtml;
    protected $options;

    public function __construct() {

    }

    public function getStartHtml() {
        return $this->startHtml;
    }

    public function getEndHtml() {
        return $this->endHtml;
    }

    public function getOptionsArray() {
        return $this->options;
    }

} 