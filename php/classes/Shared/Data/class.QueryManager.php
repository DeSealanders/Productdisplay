<?php

class QueryManager {

    private function __construct() {

    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return DatabaseManager
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new QueryManager();
        }
        return $instance;
    }

    /*
     *
     * ---------------------- Elements ----------------------
     *
     *
     */
    public function getHeaderData() {
        $query = "SELECT * FROM header as h";
        return DatabaseManager::getInstance()->executeQuery($query);
    }

    public function getMenuData($menuId) {
        $query = "SELECT * FROM menu as m WHERE m.headerId = ?";
        $params = array($menuId);
        return DatabaseManager::getInstance()->executeQuery($query, $params);
    }
    public function getFooterData() {
        $query = "SELECT * FROM footer as f";
        return DatabaseManager::getInstance()->executeQuery($query);
    }

    public function getSocialmediaData($socialmediaId) {
        $query = "SELECT * FROM socialmedia as s WHERE s.footerId = ?";
        $params = array($socialmediaId);
        return DatabaseManager::getInstance()->executeQuery($query, $params);
    }

    public function getContentData() {
        $query = "SELECT * FROM content as c";
        return DatabaseManager::getInstance()->executeQuery($query);
    }

    public function getSectionData($contentId) {
        $query = "SELECT * FROM section as s WHERE s.contentId = ?";
        $params = array($contentId);
        return DatabaseManager::getInstance()->executeQuery($query, $params);

    }


} 