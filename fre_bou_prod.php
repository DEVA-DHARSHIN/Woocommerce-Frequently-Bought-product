<?php
/*
Plugin Name:"Freaquently Bought Product"
Plugin URI: https://localhost:8000
Description: This is to add the frequently bought product suggestion from user's search
Author: Devadharshini
Version:1.1.2
*/

defined("ABSPATH") or die;
defined("FBT_PATH") or define("FBT_PATH",plugin_dir_path(__FILE__));
defined("FBT_URL") or define("FBT_PATH",plugin_dir_url(__FILE__));
if(!file_exists( FBT_PATH . 'vendor\autoload.php')){
    return;
}
require_once FBT_PATH. 'vendor\autoload.php';
if(class_exists('Fbt\App\Router')){
    $router= new \Fbt\App\Router;
    $router-> init();
}