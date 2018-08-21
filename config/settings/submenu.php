<?php
/**
 * Settings Submenu Configuration for the plugin
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
use const WPElk\OnOffSwitch\TEXT_DOMAIN;

return array(
    array(
        'parent_slug' => 'options-general.php',
        'page_title'  => __('On/Off Switch Options', TEXT_DOMAIN),
        'menu_title'  => 'On/Off Switch',
        'capability'  => 'manage_options',
        'menu_slug'   => 'on-off-switch',
        'template'    => PLUGIN_PATH . 'templates/admin/submenu.php',
    ),
);
