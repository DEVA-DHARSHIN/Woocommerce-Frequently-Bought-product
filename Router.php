<?php
namespace Fbt\App;
use Fbt\App\Controller\MainController;

class Router
{
    public static function init(){
        add_filter('woocommerce_product_data_tabs',[MainController::class, 'ProductTab']);
        add_action('woocommerce_product_data_panels',[MainController::class, 'ProductTabview']);
        add_action('woocommerce_process_product_meta', [MainController::class,'ProductSaved']);
        add_action('admin_enqueue_scripts', [MainController::class,'enqueueScripts']);
        add_action('wp_enqueue_scripts',[MainController::class,'enqueueScripts']);
    }
}