<?php

class EditGenerator {

    private function __construct() {

    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return EditGenerator
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new EditGenerator();
        }
        return $instance;
    }

    public function getMiscEditor() {
        echo EditorFactory::getInstance()->getMiscEditor()->getHtml();
    }

    public function getHeaderEditor() {
        echo EditorFactory::getInstance()->getHeaderEditor()->getHtml();
    }

    public function getSectionsEditor() {
        echo EditorFactory::getInstance()->getSectionsEditor()->getHtml();
    }

    public function getFooterEditor() {
        echo EditorFactory::getInstance()->getFooterEditor()->getHtml();
    }

} 