<?php

    /**
     * User: Daniel Schmitzer (daschmi@daschmi.de)
     * Date: 10.07.17
     * Time: 14:08
     *
     * Plugin Name: GetContentFromURL
     * Plugin URI: https://daschmi.de/gcfu
     * Description: load content from url by using xpath
     * Version: 1.0
     * Author: Daniel Schmitzer
     * Author URI: https://daschmi.de/
     * Text Domain: gcfu
     * Domain Path: /languages
     */

    namespace gcfu;

    require_once dirname(__FILE__).'/classes/ds.class.php';
    require_once dirname(__FILE__).'/classes/action.class.php';
    require_once dirname(__FILE__).'/classes/shortcode.class.php';

    add_shortcode('gcfu', array('\gcfu\shortcode', 'gcfu'));

    add_action('plugins_loaded', array('\gcfu\action', 'plugins_loaded'));