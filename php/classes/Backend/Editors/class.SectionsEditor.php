<?php

class SectionsEditor {

    public function __construct() {

    }

    public function getHtml() {
        echo getElementStart('Sections');
        echo getFormStart();
        echo $this->getTextEdit();
        echo $this->getColorEdit();
        // TODO Sections editor
        echo $this->getSectionsEdit();
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
        $html = getPanelStart('Sections')
        . FormGenerator::getInstance()->getTextEditor('Section 1 html', 'section1html' , '<h2>Nog niet af</h2><p>De content uit dit component kan later aan de voorkant gekoppeld worden</p>')
        . getPanelEnd();
        return $html;
    }
} 