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
            . FormGenerator::getInstance()->getTextField('Page title', 'pageTitle' , 'Demo CMS')
            . getPanelEnd();
        return $html;
    }

    public function getSeoEdit() {
        $html = getPanelStart('Search engine optimalisation)')
        . FormGenerator::getInstance()->getTextField('Meta tags', 'headerTitle' , 'Demo, Peter Ton, CMS')
        . FormGenerator::getInstance()->getTextField('Meta description', 'headerTitle' , 'Demo CMS')
        . getPanelEnd();
        return $html;
    }
} 