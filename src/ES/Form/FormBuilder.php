<?php

namespace ES\Form;

use ES\Form\Interfaces\iRender;


class FormBuilder {

    private $method;
    private $action;
    private $fields = array();

    public function AddElements(iRender $field) {
        array_push($this->fields, $field);
        return $this;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getAction() {
        return $this->action;
    }

    public function setMethod($method) {
        $this->method = $method;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function Render() {
        $html = '<form action="' . $this->getAction() . '" method="' . $this->getMethod() . '">';
        foreach($this->fields as $field){
            $html .= $field->RenderField()."\n";
        }
        $html .= '</form>';
        return $html;
    }

}
