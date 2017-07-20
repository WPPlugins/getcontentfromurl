<?php

    /**
     * User: Daniel Schmitzer (daschmi@daschmi.de)
     * Date: 10.07.17
     * Time: 14:24
     */

    namespace gcfu;

    abstract class ds
    {

        public static function isSizedString(&$val)
        {

            if (strlen(strval($val)) > 0) return true;
            else return false;

        } // public static function isSizedString($val)

    } // abstract class ds