<?php

class EditorFactory {

    private $editors;

    private function __construct() {

    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return EditorFactory
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new EditorFactory();
        }
        return $instance;
    }

    public function getHeaderEditor() {
        if(!isset($editors['header'])) {
            $editors['header'] = new HeaderEditor();
        }
        return $editors['header'];
    }

    public function getSectionsEditor() {
        if(!isset($editors['sections'])) {
            $editors['sections'] = new SectionsEditor();
        }
        return $editors['sections'];
    }

    public function getFooterEditor() {
        if(!isset($editors['footer'])) {
            $editors['footer'] = new FooterEditor();
        }
        return $editors['footer'];
    }

    public function getMiscEditor() {
        if(!isset($editors['misc'])) {
            $editors['misc'] = new MiscEditor();
        }
        return $editors['misc'];
    }

} 