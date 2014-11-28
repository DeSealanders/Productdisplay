<?php
require('php/config/conf.default.php');

// If a single texteditor is being saved
if(count($_POST) == 2) {
    if(isset($_POST['sectionId']) && $_POST['sectionData']) {

        $query = new Query();
        $query->update('section', array('content' => htmlspecialchars($_POST['sectionData'])));
        $query->where('id = ' . $_POST['sectionId']);
        DatabaseManager::getInstance()->executeQuery($query, array());
    }
}