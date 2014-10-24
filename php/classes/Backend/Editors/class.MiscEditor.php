<?php

class MiscEditor {

    public function __construct() {

    }

    public function getHtml() {
        echo getElementStart('Misc');
        echo getFormStart();
        echo $this->getPageProperties();
        echo $this->getSeoEdit();
        // TODO Logo
        echo getFormEnd();
        echo getElementEnd();
    }

    public function getPageProperties() {
        $html = getPanelStart('Page properties')
            . FormGenerator::getInstance()->getTextField('Page title', 'pageTitle' , 'Productdisplay')
            . getPanelEnd();
        return $html;
    }

    public function getSeoEdit() {
        $html = getPanelStart('Search engine optimalisation)')
        . FormGenerator::getInstance()->getTextField('Meta tags', 'headerTitle' , 'Rookworstwaren©')
        . FormGenerator::getInstance()->getTextField('Meta description', 'headerTitle' , 'Rookworstwaren©')
        . getPanelEnd();
        return $html;
    }
} 