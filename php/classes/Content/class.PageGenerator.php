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
        $html = '';
        $transitioned = false;
        foreach($this->sections->getSections() as $key => $section) {
            if($key % 2 == 0) {
                $class = 'even';
            }
            else {
                $class = 'odd';
            }
            if($transitioned == false) {
                $class .= ' spaced';
            }
            $html .= '<div class="' . $class . '" id="' . $section->getTitle() . '">';
            $html .= '<h2>' . $section->getTitle() . '</h2>';
            $html .= $section->getHtml();
            $html .= '</div>';

            if($section->getTransition() == true) {
                $transitioned = true;
                if($key % 2 == 0) {
                    $html .= '<div class="transition1"></div>';
                }
                else {
                    $html .= '<div class="transition2"></div>';
                }
            }
            else {
                $transitioned = false;
            }
        }
        return $html;
    }

    public function getHeaderHtml() {
        $html = '<header>';
        $html .= '<h1>' . $this->header->getTitle() . '</h1>';
        $html .= '<nav><ul>';
        foreach($this->header->getMenu() as $text => $link) {
            $html .= '<li><a href="' . $link . '">' . $text . '</a></li>';
        }
        $html .= '</ul></nav>';
        $html .= '</header>';
        return $html;
    }

    public function getFooterHtml() {
        if(count($this->sections->getSections()) % 2 == 0) {
            $class = 'even';
        }
        else {
            $class = 'odd';
        }
        $html = '<footer class="' . $class . '">';
        $html .= '<ul>';
        foreach($this->footer->getSocialmedia() as $type => $link) {
            $html .= '<li><a <a class="fa fa-' . $type . ' fa-2x" target="_blank" href="' . $link . '"></a></li>';
        }
        $html .= '</ul>';
        $html .= '<p>' . $this->footer->getText() .  ' &copy; ' . date('Y', time()) . '</p>';
        $html .= '</footer>';
        return $html;
    }

} 