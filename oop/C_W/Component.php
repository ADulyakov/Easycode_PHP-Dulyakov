<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'Color.php';

abstract class Component
{
    public $color;
    public $width;
    public $height;

    public function __construct($color, $width, $height)
    {
        $this->color = $color;
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function render();

    };