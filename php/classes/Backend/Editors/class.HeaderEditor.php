<?php

class HeaderEditor {

    public function __construct() {

    }

    public function getHtml() {
        echo getElementStart('Header');
        echo getFormStart('header');
        echo $this->getHeaderEdit();
        echo $this->getMenuEdit();
        echo getFormEnd();
        echo getElementEnd();
    }

    public function getHeaderEdit() {
        $html = getPanelStart('Text')
        . FormGenerator::getInstance()->getTextField('Text', 'headerTitle' , 'Demo beheeromgeving')
        . FormGenerator::getInstance()->getColorSelect('Text color', 'headerTextColor' , '2c3e50')
        . FormGenerator::getInstance()->getColorSelect('Background color', 'headerColor' , 'ff9100')
        . getPanelEnd();
        return $html;
    }

    public function getMenuEdit() {
        $html = getPanelStart('Menu')
        . FormGenerator::getInstance()->getList('Menu items', 'menuItems' , array(
                'Home' => '#Home',
                'Uitleg' => '#Uitleg',
                'Beheer' => '#Beheer',
                'Opties' => '#Opties',
                'Onder constructie' => '#Onder constructie',
            ))
        . FormGenerator::getInstance()->getColorSelect('Text color', 'navTextColor' , '61656b')
        . FormGenerator::getInstance()->getColorSelect('Text hover color', 'navTextColorHover' , 'c2c2c2')
        . getPanelEnd();
        return $html;
    }
} 