<?php

function getPanelStart($title, $type = 'default') {
    $html = '<div class="panel panel-' . $type . '">'
        . '<div class="panel-heading">' . $title . '</div>'
        . '<div class="panel-body">';
    return $html;
}

function getPanelEnd() {
    return '</div></div>';
}

function getFormStart() {
    $html = '<form role="form" class="form-horizontal">';
    return $html;
}

function getFormEnd() {
    $html = '</form>';
    return $html;
}

function getElementStart($title) {
    $html = '<div class="elementHeader">'
        . '<span class="icon glyphicon glyphicon-minus"></span>'
        . '<h2>' . $title . '</h2>'
        . '</div>'
        .'<div class="element">';
    return $html;
}

function getElementEnd() {
    return '</div>';
}