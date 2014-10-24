<?php

class DataProvider {

    private function __construct() {

    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return DataProvider
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new DataProvider();
        }
        return $instance;
    }

    public function getHeaderData() {
        $headerData = QueryManager::getInstance()->getHeaderData();
        if(count($headerData) > 0) {
            $menuData = QueryManager::getInstance()->getMenuData($headerData[0]['headerId']);
        }
        return array('headerData' => $headerData[0],
            'menuData' => $menuData);
    }

    public function getFooterData() {
        $footerData = QueryManager::getInstance()->getFooterData();
        if(count($footerData) > 0) {
            $socialmediaData = QueryManager::getInstance()->getSocialmediaData($footerData[0]['footerId']);
        }
        return array('footerData' => $footerData[0],
            'socialmediaData' => $socialmediaData);
    }

    public function getContentData() {
        $contentData = QueryManager::getInstance()->getContentData();
        if(count($contentData) > 0) {
            $sectionData = QueryManager::getInstance()->getSectionData($contentData[0]['contentId']);
        }
        return array('contentData' => $contentData[0],
            'sectionData' => $sectionData);
    }

} 