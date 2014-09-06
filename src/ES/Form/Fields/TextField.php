<?php

namespace ES\Form\Fields;
use ES\Form\Interfaces\iRender;

class TextField implements iRender {

    private $label;
    private $name;
    private $placeholder;
        
    function __construct($label, $name, $placeholder) {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
    }
    
    public function RenderField() {
        $html = "<div class=\"form-group\">";
        $html .= "<label>{$this->label}";
        $html .= "<input class=\"form-control\" type=\"text\" name=\"{$this->name}\" placeholder=\"{$this->placeholder}\">";
        $html .= "</label>";
        $html .= "</div>";
        return $html;
    }

}
