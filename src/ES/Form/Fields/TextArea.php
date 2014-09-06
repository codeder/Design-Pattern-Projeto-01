<?php

namespace ES\Form\Fields;
use ES\Form\Interfaces\iRender;

class TextArea implements iRender {
    
    private $name;
    private $label;
    private $placeholder;
    
    function __construct($name = null, $label, $placeholder = null) {
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    public function RenderField() {
        
        $html = "<div class=\"form-group\">";
        $html .= "<label>{$this->label}";
        $html .= "<textarea class=\"form-control\" name='{$this->name}'></textarea>";
        $html .= "</label>";
        $html .= "</div>";
        
        return $html;
    }

}
