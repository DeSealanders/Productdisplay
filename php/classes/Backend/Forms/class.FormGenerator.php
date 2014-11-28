<?php

class FormGenerator {

    private function __construct() {

    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return EditGenerator
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new FormGenerator();
        }
        return $instance;
    }

    public function getTextField($label, $id, $value) {
        $html = '<div class="form-group">'
                . '<label class="control-label col-sm-3" for="' . $id . '">' . $label . '</label>'
                . '<div class="col-sm-4">'
                . '<input class="form-control" id="' . $id . '" type="text" value="' . $value . '">'
                . '</input></div></div>';
        return $html;
    }

    public function getColorSelect($label, $id, $value) {
        $html = '<div class="form-group">'
            . '<label class="control-label col-sm-3" for="' . $id . '">' . $label . '</label>'
            . '<div class="col-sm-8">'
            . '<div id="' . $id . '" data-color="' . $value . '" class="color-box"></div>'
            . '</div></div>';
        return $html;
    }

    public function getList($label, $id, $values) {
        $html = '<div class="form-group">'
            . '<label class="control-label col-sm-3" for="' . $id . '">' . $label . '</label>'
            . '<div class="col-sm-8">'
            . '<div id="' . $id . '">'
            . '<div class="panel panel-default">'
            . '<div class="highlighted panel-body">'
            . '<span class="item">Menu-item</span>'
            . '<span class="link">Link</span>'
            . '</div>'
            . '<ul id="sortable" class="list-group">';
        foreach($values as $text => $link) {
            $html .= '<li class="ui-state-default list-group-item">'
                //. '<span class="item">' . $text . '</span>'
                //. '<input type="text" placeholder="Naam" value="abc"></input>'
                . '<input class="dual text form-control" type="text" value="' . $text . '" placeholder="Menu-item">'
                . '</input>'
                . '<input class="dual link form-control" type="text" value="' . $link . '" placeholder="Link">'
                . '</input>';
                //. '<span class="link">' . $link . '</span></li>';
        }
        $html .= '</ul></div>
</div>'
            . '</div></div>';
        return $html;
    }

    public function getTextEditor($label, $id, $value) {
        $html = '<div class="form-group">'
            . '<label class="control-label col-sm-1" for="' . $id . '">' . $label . '</label>'
            . '<div class="col-sm-12">'
            . '<textarea class="textEditor" id="' . $id . '" cols="80" rows="15">'
            . $value
            . '</textarea>'
            . '</div></div>';
        return $html;
    }

    public function getButton($label, $id) {
        $html = '<div class="form-group">'
            . '<button type="submit" id="' . $id . '" class="btn btn-primary col-sm-2">' . $label . '</button>'
            . '</div>';
        return $html;
    }

} 