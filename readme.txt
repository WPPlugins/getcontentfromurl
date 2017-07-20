=== GetContentFromURL ===
Contributors: Daschmi
Donate link: http://daschmi.de/
Tags: xpath,content,url,read,shortcode
Requires at least: 3.0.1
Tested up to: 4.9
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Loads content from other url by using a shortcode. Full content or special container by using XPath.

== Description ==

Loads content from other url by using a shortcode. Full content or special container by using XPath.

Examples:

* Displays the whole content from a page.

`[gcfu url="https://daschmi.de"]`

* Displays the featured article from wikipedia.

`[gcfu url="https://de.wikipedia.org/wiki/Wikipedia:Hauptseite" xpath="%2F%2F%2A%5B%40id%3D%22mf-tfa%22%5D"]`

The XPath argument must be url encoded. You can use [this](https://daschmi.de/tools-2/urlencode-urldecode/ "URL Encode custom String") tool.

== Screenshots ==

1. Grab the URL of the target page.

2. get the XPath of the target container. (for example with the chrome dev tools)

3. encode the XPath with urlencode.

4. build and use the shortcut.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the '[gcfu]' shortcode on your pages

== Changelog ==

= 1.0 =
* Initial release