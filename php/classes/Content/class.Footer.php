<?php

class Footer extends Element {

    private $text;
    private $socialmedia;
    private $footerColorEven;
    private $footerColorOdd;

    public function __construct() {
        $this->start = '<footer class="' . $this->getClass() . '">';
        $this->end = '</footer>';

        // Set test data
        $this->text = 'Product display';
        $this->socialmedia = array(
            'twitter' => 'http://www.twitter.com/ptrton',
            'facebook' => 'http://www.facebook.com/ptrton',
        );
        $this->footerColorEven = 'gray';
        $this->footerColorOdd = 'white';
    }

    public function getSocialmedia()
    {
        $html = '<ul>';
        foreach($this->socialmedia as $type => $link) {
            $html .= '<li><a <a class="fa fa-' . $type . ' fa-2x" target="_blank" href="' . $link . '"></a></li>';
        }
        $html .= '</ul>';
        return $html;
    }

    public function getText()
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