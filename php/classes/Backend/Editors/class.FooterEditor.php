<?php

class FooterEditor {

    public function __construct() {

    }

    public function getHtml() {
        echo getElementStart('Footer');
        echo getFormStart('footer');
        echo $this->getTextEdit();
        echo $this->getColorEdit();
        echo $this->getSocialMediaEdit();
        // TODO social media elements
        echo getFormEnd();
        echo getElementEnd();
    }

    public function getTextEdit() {
        $html = getPanelStart('Text')
        . FormGenerator::getInstance()->getTextField('Footer text', 'footerTitle' , 'Gemaakt door Peter Ton ©')
        . FormGenerator::getInstance()->getColorSelect('Footer text color', 'footerTextColor' , '2c3e50')
        . getPanelEnd();
        return $html;
    }

    public function getColorEdit() {
        $html = getPanelStart('Background')
        . FormGenerator::getInstance()->getColorSelect('Footer color 1', 'footerColorEven' , '61656b')
        . FormGenerator::getInstance()->getColorSelect('Footer color 2', 'footerColorOdd' , 'c2c2c2')
        . getPanelEnd();
        return $html;
    }

    public function getSocialMediaEdit() {
        $html = getPanelStart('Social media')
            . FormGenerator::getInstance()->getColorSelect('Social media color', 'socialmediaColor' , '61656b')
            . getPanelEnd();
        return $html;
    }
} 