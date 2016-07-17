<?php


class Autoloader
{
    static function autoload($file)
    {
        require "$file.php";
    }
    static function register()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }
}