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
 */

namespace WPElk\OnOffSwitch;

use const WPElk\OnOffSwitch\PLUGIN_PATH;

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$configPath = PLUGIN_PATH . 'config/settings/settings.php';
$options    = include $configPath;

foreach ($options as $option) {
    $optionName = $option['option_name'];
    delete_option($optionName);
    delete_site_option($optionName);
}
