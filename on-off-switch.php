<?php
/**
 * WordPress plugin for an On/Off Switch.
 * 
 * PHP version 7.0
 * 
 * @category   WordPressPlugin
 * @package    WPElk
 * @subpackage OnOffSwitch
 * @author     WP Elk <hugo@hugorettien.com>
 * @license    GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link       https://www.wpelk.com/on-off-switch
 * 
 * Plugin Name: On/Off Switch
 * Plugin URI: https://wpelk.com/on-off-switch
 * Description: Display different text whether you are available or not. Use shortcode [on-off-switch] on your page
 * Version: 1.0.0
 * Author: WP Elk
 * Author URI: https://www.wpelk.com/
 * Licence GPLv3
 * Text Domain: on-off-switch
 */

namespace WPElk\OnOffSwitch;

use WPElk\OnOffSwitch\Includes\Init;

defined('ABSPATH') or die('No script kiddies please!');

define(__NAMESPACE__ . '\PLUGIN_PATH', plugin_dir_path(__FILE__));
define(__NAMESPACE__ . '\PLUGIN_URL', plugin_dir_url(__FILE__));
define(__NAMESPACE__ . '\PLUGIN', plugin_basename(__FILE__));
define(__NAMESPACE__ . '\TEXT_DOMAIN', 'on-off-switch');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

Init::registerServices();
