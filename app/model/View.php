<?php
/**
 * Created by PhpStorm.
 * User: mia
 * Date: 30.01.19.
 * Time: 17:06
 */
class View
{
    private $layout;
    public function __construct($layout= "layout")
    {
        $this->layout = basename($layout);
    }

}