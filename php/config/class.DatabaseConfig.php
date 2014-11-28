<?php
/**
 * This class is the config file for the database
 */
class DatabaseConfig {

    public function __construct() {
    }

    /**
     * Return database details on basis of host location
     * @return array database details
     */
    public function getDbDetails() {
        if(isLive()) {
            return $this->getLiveDetails();
        }
        else {
            return $this->getLocalDetails();
        }
    }

    private function getLocalDetails() {
        return array(
            'username' => 'root',
            'password' => 'usbw',
            'database' => 'productdisplay',
            'address' => 'localhost'
        );
    }

    private function getLiveDetails() {
        return array(
            'password' => 'Rgpqy63lD',
            'username' => 'tonpeter_democms',
            'database' => 'tonpeter_democms',
            'address' => 'localhost'
        );
    }
}