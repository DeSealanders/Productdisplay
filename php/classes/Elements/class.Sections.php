<?php

class Sections extends Element {

    private $colorEven;
    private $colorOdd;
    private $textColorEven;
    private $textColorOdd;
    private $sections;

    public function __construct() {
        $this->start = '<div class="sections">';
        $this->end = '</div>';

        // Set test data
        $this->colorEven = "white";
        $this->colorOdd = "#2c3e50";
        $this->textColorEven = '#333';
        $this->textColorOdd = 'white';
        $this->sections = array(
            new Section('Fred', '<p>Fred is een boer</p>', false),
            new Section('Henk', '<p>Henk houdt van aardappels</p>', true),
            new Section('Piet', '<p>Piet wilt appels plukken</p>', true),
            new Section('Anita', '<p>Anita eet graag koekjes</p>', false),
        );
    }

    public function getColorEven()
    {
        return $this->colorEven;
    }

    public function getColorOdd()
    {
        return $this->colorOdd;
    }

    public function getSections()
    {
        $html = '';
        $prevSection = false;
        foreach($this->sections as $key => $section) {
            $html .= $section->getHtml($key, $prevSection);
            $prevSection = $section;
        }
        return $html;
    }

    public function getTextColorEven()
    {
        return $this->textColorEven;
    }

    public function getTextColorOdd()
    {
        return $this->textColorOdd;
    }

    public function getSectionCount() {
        return count($this->sections);
    }

} 