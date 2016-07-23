<?php
require "Core/Autoloader.php";
Autoloader::register();
$db = new Database();

if (!isset($_SESSION["login"])){
    $_GET['p'] = 'login';
}
$page = isset($_GET['p']) ? $_GET['p'] : 'home';

ob_start();
if (file_exists("Pages/$page.php"))
{
    require "Pages/$page.php";
} else
{
    require "Pages/404.php";
}
$content = ob_get_clean();
require "Pages/Templates/Default.php";