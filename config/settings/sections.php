<?php
/**
 * Settings Section Configuration for the plugin
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
namespace WPElk\OnOffSwitch\Config;
use const WPElk\OnOffSwitch\PLUGIN_PATH;

return array(
    array(
        'id'        => 'onOffSwitch_settings_sections',
        'title'     => 'Parameters',
        'template'  => PLUGIN_PATH . 'templates/admin/section.php',
        'page'      => 'on-off-switch',
    ),
);
