<?php

class DataSender {

    private function __construct() {

    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return DataSender
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new DataSender();
        }
        return $instance;
    }



} 