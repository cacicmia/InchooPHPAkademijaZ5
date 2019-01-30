<?php
/**
 * Created by PhpStorm.
 * User: mia
 * Date: 30.01.19.
 * Time: 15:02
 */
class Request
{
    public static function pathInfo()
    {
        if (isset($_SERVER["PATH_INFO"])) {
            return $_SERVER["PATH_INFO"];
        } elseif (isset($_SERVER["REDIRECT_PATH_INFO"])) {
            return $_SERVER["REDIRECT_PATH_INFO"];
        } else {
            return "";
        }
    }
}