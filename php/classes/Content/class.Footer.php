<?php

class Footer {

    private $text;
    private $socialmedia;
    private $footerColorEven;
    private $footerColorOdd;

    public function __construct() {
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
        return $this->socialmedia;
    }

    public function getText()
    {
        return $this->text;
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