<?php

class Section {
    private $content;
    private $title;
    private $transition;

    public function __construct($title, $content, $transition) {
        $this->title = $title;
        $this->content = $content;
        $this->transition = $transition;
    }


    public function getContent()
    {
        return $this->content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTransition()
    {
        return $this->transition;
    }

    public function getHtml($key, $prevSection) {
        $html = '';
        if(isEven($key)) {
            $class = 'even';
        }
        else {
            $class = 'odd';
        }
        if($prevSection && !$prevSection->getTransition()) {
            $class .= ' spaced';
        }
        $html .= '<div class="' . $class . '" id="' . $this->title. '">';
        $html .= '<h2>' . $this->title . '</h2>';
        $html .= $this->content;
        $html .= '</div>';

        if($this->transition == true) {
            if(isEven($key)) {
                $html .= '<div class="transition1"></div>';
            }
            else {
                $html .= '<div class="transition2"></div>';
            }
        }
        return $html;
    }

} 