<?php

class SectionsEditor {

    private $sections;

    public function __construct() {
        $this->sections = ElementFactory::getInstance()->getSections();
    }

    public function getHtml() {
        echo getElementStart('Sections');
        echo getFormStart('sections');
        //echo $this->getTextEdit();
        //echo $this->getColorEdit();
        echo $this->getSectionsEdit();
        //echo $this->getSectionsSave();
        echo getFormEnd();
        echo getElementEnd();
    }

    public function getTextEdit() {
        $html = getPanelStart('Colors')
        . FormGenerator::getInstance()->getColorSelect('Text color 1', 'textColorEven' , '2c3e50')
        . FormGenerator::getInstance()->getColorSelect('Text color 2', 'textColorOdd' , '2c3e50')
        . getPanelEnd();
        return $html;
    }

    public function getColorEdit() {
        $html = getPanelStart('Background')
        . FormGenerator::getInstance()->getColorSelect('Background color 1', 'colorEven' , '737578')
        . FormGenerator::getInstance()->getColorSelect('Background color 2', 'colorOdd' , 'c2c2c2')
        . getPanelEnd();
        return $html;
    }

    public function getSectionsEdit() {
        $html = getPanelStart('Sections');
        foreach($this->sections->getSections() as $sectionNr => $section) {
            $html .= FormGenerator::getInstance()->getTextEditor($section->getTitle(), $section->getId() , $section->getContent());
        }
        $html .= getPanelEnd();
        return $html;
    }

    public function getSectionsSave() {
        return FormGenerator::getInstance()->getButton('Opslaan', 'save');
    }
} 