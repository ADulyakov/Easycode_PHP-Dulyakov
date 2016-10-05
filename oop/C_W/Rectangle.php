<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Component.php';

class Rectangle extends Component
{
    public function render ($color, $width, $height) {
    echo '<div style="background-color:RGB(' . $this->color->red . ',' . $this->color->green . ',' .
        $this->color->blue . ');width:' . $this->width . '; height:'. $this->height . '"></div>';
    }
}
            

