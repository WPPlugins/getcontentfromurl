<?php

    /**
     * User: Daniel Schmitzer (daschmi@daschmi.de)
     * Date: 10.07.17
     * Time: 14:18
     */

    namespace gcfu;

    abstract class shortcode
    {

        public static function gcfu($atts)
        {

            $xpath_query = urldecode(@$atts['xpath']);
            $url = urldecode(@$atts['url']);

            $response = wp_remote_get($url);

            $url_content = $response['body'];

            if (ds::isSizedString($xpath_query))
            {

                $doc = new \DOMDocument();
                @$doc->loadHTML($url_content);

                $xpath = new \DOMXpath($doc);
                $xpath_resultset = $xpath->query($xpath_query);

                $url_content = $doc->saveHTML($xpath_resultset->item(0));

            }

            $strOutput  = '<div style="position:relative;">';
            $strOutput .= $url_content;
            $strOutput .= '<p style="margin-top:5px; font-size:0.8em; color:#C5C5C5;">'.sprintf(__('Content Loaded from %s', 'gcfu'), '<a href="'.$url.'">'.$url.'</a>').'</p>';
            $strOutput .= '<div>';

            return $strOutput;

        } // public static function gcfu($atts, $content = null)

    } // abstract class shortcode
