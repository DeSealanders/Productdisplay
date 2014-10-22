<?php

class PageGenerator {

    private $header;
    private $sections;
    private $footer;

    private function __construct() {
        $this->header = ElementFactory::getInstance()->getHeader();
        $this->sections = ElementFactory::getInstance()->getSections();
        $this->footer = ElementFactory::getInstance()->getFooter();
    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return PageGenerator
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new PageGenerator();
        }
        return $instance;
    }

    public function getContentHtml() {
        //$html = $this->sections->getStart();
        $html = $this->sections->getSections();
        //$html .= $this->sections->getEnd();
        return $html;
    }

    public function getHeaderHtml() {
        $html = $this->header->getStart();
        $html .= $this->header->getTitle();
        $html .= $this->header->getMenu();
        $html .= $this->header->getEnd();
        return $html;
    }

    public function getFooterHtml() {
        $html = $this->footer->getStart();
        $html .= $this->footer->getSocialmedia();
        $html .= $this->footer->getText();
        $html .= $this->footer->getEnd();
        return $html;
    }

} 