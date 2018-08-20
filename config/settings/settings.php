<?php
/**
 * Settings Configuration for the plugin
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
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_availability',
        'args'          => array(
            'type'    => 'bool',
            'default' => false,
        ),
        'field' => array(
            'id'       => 'onOffSwitch_availability',
            'title'    => 'Availability',
            'template' => PLUGIN_PATH . 'templates/admin/fields/switch.php',
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
        ),
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_availableMessage',
        'args'          => array(
            'type'    => 'string',
            'default' => 'Currently Available',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_availableMessage',
            'title'    => 'Message when available',
            'template' => PLUGIN_PATH . 'templates/admin/fields/text.php',
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
        ),
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_unavailableMessage',
        'args'          => array(
            'type'    => 'string',
            'default' => 'Currently Unavailable',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_unavailableMessage',
            'title'    => 'Message when unavailable',
            'template' => PLUGIN_PATH . 'templates/admin/fields/text.php',
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
        ),
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_availableColor',
        'args'          => array(
            'type'    => 'string',
            'default' => '#4caf50',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_availableColor',
            'title'    => 'Color when available',
            'template' => PLUGIN_PATH . 'templates/admin/fields/colorPicker.php',
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
        ),
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_unavailableColor',
        'args'          => array(
            'type'    => 'string',
            'default' => '#f44336',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_unavailableColor',
            'title'    => 'Color when unavailable',
            'template' => PLUGIN_PATH . 'templates/admin/fields/colorPicker.php',
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
        ),
    ),
);
