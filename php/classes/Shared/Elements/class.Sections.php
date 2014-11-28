<?php

class Sections extends Element {

    private $colorEven;
    private $colorOdd;
    private $textColorEven;
    private $textColorOdd;
    private $sections;

    public function __construct() {
        $this->startHtml = '<div class="sections">';
        $this->endHtml = '</div>';

        $data = DataProvider::getInstance()->getContentData();

        // Content data
        $this->colorEven = $data['contentData']['colorEven'];
        $this->colorOdd = $data['contentData']['colorOdd'];
        $this->textColorEven = $data['contentData']['textColorEven'];
        $this->textColorOdd = $data['contentData']['textColorOdd'];

        // Sections data
        $this->sections = array();
        if(count($data['sectionData']) > 0) {
            foreach($data['sectionData'] as $section) {
                $this->sections[] = new Section($section['title'], $section['content'], $section['transition'], $section['id']);
            }
        }
    }

    public function getColorEven()
    {
        return $this->colorEven;
    }

    public function getColorOdd()
    {
        return $this->colorOdd;
    }

    public function getSectionsHtml()
    {
        $html = '';
        $prevSection = false;
        foreach($this->sections as $key => $section) {
            $html .= $section->getHtml($key, $prevSection);
            $prevSection = $section;
        }
        return $html;
    }

    public function getSections() {
        return $this->sections;
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