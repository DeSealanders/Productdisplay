<?php

class PageGenerator {

    private $header;
    private $sections;
    private $footer;

    public function __construct() {
        $this->header = array(
            'title' => 'Dit is een test',
            'menu' => array(
                'Fred' => '#Fred',
                'Piet' => '#Piet',
                'Anita' => '#Anita',
            )
        );
        $this->sections = array(
            array(
                'html' => '<p>Fred is een boer</p>',
                'title' => 'Fred',
                'transition' => false
            ),
            array(
                'html' => '<p>Henk houdt van aardappels</p>',
                'title' => 'Henk',
                'transition' => true
            ),
            array(
                'html' => '<p>Piet wilt appels plukken</p>',
                'title' => 'Piet',
                'transition' => true
            ),
            array(
                'html' => '<p>Anita eet graag koekjes</p>',
                'title' => 'Anita',
                'transition' => false
            ),
        );
        $this->footer = array(
            'text' => 'Product display',
            'socialmedia' => array(
                'twitter' => 'http://www.twitter.com/ptrton',
                'facebook' => 'http://www.facebook.com/ptrton',
            )
        );
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
        foreach($this->sections as $key => $section) {
            if($key % 2 == 0) {
                $class = 'even';
            }
            else {
                $class = 'odd';
            }
            if($transitioned == false) {
                $class .= ' spaced';
            }
            $html .= '<div class="' . $class . '" id="' . $section['title'] . '">';
            $html .= '<h2>' . $section['title'] . '</h2>';
            $html .= $section['html'];
            $html .= '</div>';

            if($section['transition'] == true) {
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
        $html .= '<h1>' . $this->header['title'] . '</h1>';
        $html .= '<nav><ul>';
        foreach($this->header['menu'] as $text => $link) {
            $html .= '<li><a href="' . $link . '">' . $text . '</a></li>';
        }
        $html .= '</ul></nav>';
        $html .= '</header>';
        return $html;
    }

    public function getFooterHtml() {
        $html = '<footer>';
        $html .= '<ul>';
        foreach($this->footer['socialmedia'] as $text => $link) {
            $html .= '<li><a href="' . $link . '">' . $text . '</a></li>';
        }
        $html .= '</ul>';
        $html .= $this->footer['text'] .  ' &copy; ' . date('Y', time());
        $html .= '</footer>';
        return $html;
    }

} 