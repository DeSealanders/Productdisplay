<?php

class ElementFactory {

    private $elements;

    private function __construct() {

    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return ElementFactory
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new ElementFactory();
        }
        return $instance;
    }

    public function getHeader() {
        if(!isset($elements['header'])) {
            $elements['header'] = new Header();
        }
        return $elements['header'];
    }

    public function getSections() {
        if(!isset($elements['sections'])) {
            $elements['sections'] = new Sections();
        }
        return $elements['sections'];
    }

    public function getFooter() {
        if(!isset($elements['footer'])) {
            $elements['footer'] = new Footer();
        }
        return $elements['footer'];
    }

} 