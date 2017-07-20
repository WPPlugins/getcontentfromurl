<?php

    /**
     * User: Daschmi (daschmi@daschmi.de)
     * Date: 12.07.17
     * Time: 10:13
     */

    namespace gcfu;

    abstract class action
    {

        public static function plugins_loaded()
        {

            load_plugin_textdomain('gcfu', FALSE, basename(dirname(__FILE__)).'/../languages/');

        }

    }