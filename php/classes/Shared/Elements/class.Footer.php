<?php

class Footer extends Element {

    private $text;
    private $socialmedia;
    private $footerColorEven;
    private $footerColorOdd;

    public function __construct() {
        $this->startHtml = '<footer class="' . $this->getClass() . '">';
        $this->endHtml = '</footer>';

        $data = DataProvider::getInstance()->getFooterData();

        // Footer data
        $this->text = $data['footerData']['text'];
        $this->footerColorEven = $data['footerData']['footerColorEven'];
        $this->footerColorOdd = $data['footerData']['footerColorOdd'];

        // Socialmedia data
        $this->socialmedia = array();
        if(count($data['socialmediaData']) > 0) {
            foreach($data['socialmediaData'] as $socialmediaItem) {
                $this->socialmedia[$socialmediaItem['media']] = $socialmediaItem['link'];
            }
        }
    }

    public function getSocialmediaHtml()
    {
        $html = '<ul>';
        foreach($this->socialmedia as $type => $link) {
            $html .= '<li><a <a class="fa fa-' . $type . ' fa-2x" target="_blank" href="' . $link . '"></a></li>';
        }
        $html .= '</ul>';
        return $html;
    }

    public function getTextHtml()
    {
        return '<p>' . $this->text .  ' &copy; ' . date('Y', time()) . '</p>';
    }

    public function getClass() {
        if(ElementFactory::getInstance()->getSections()->getSectionCount() % 2 == 0) {
            return 'even';
        }
        else {
            return 'odd';
        }
    }

    public function getFooterColorEven()
    {
        return $this->footerColorEven;
    }

    public function getFooterColorOdd()
    {
        return $this->footerColorOdd;
    }

} 