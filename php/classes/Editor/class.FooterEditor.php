<?php

class FooterEditor {

    public function __construct() {

    }

    public function getHtml() {
        echo getElementStart('Footer');
        echo getFormStart();
        echo $this->getTextEdit();
        echo $this->getColorEdit();
        echo getFormEnd();
        echo getElementEnd();
    }

    public function getTextEdit() {
        $html = getPanelStart('Text')
        . FormGenerator::getInstance()->getTextField('Footer text', 'headerTitle' , 'Rookworstwaren©')
        . FormGenerator::getInstance()->getColorSelect('Footer text color', 'headerTextColor' , '2c3e50')
        . getPanelEnd();
        return $html;
    }

    public function getColorEdit() {
        $html = getPanelStart('Background')
        . FormGenerator::getInstance()->getColorSelect('Footer color 1', 'footerColorEven' , '737578')
        . FormGenerator::getInstance()->getColorSelect('Footer color 2', 'footerColorOdd' , 'c2c2c2')
        . getPanelEnd();
        return $html;
    }
} 