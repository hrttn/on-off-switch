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
use const WPElk\OnOffSwitch\TEXT_DOMAIN;

return array(
    array(
        'option_group' => 'on-off-switch',
        'option_name'  => 'onOffSwitch_availability',
        'args'          => array(
            'type'              => 'boolean',
            'default'           => false,
            'sanitize_callback' => 'WPElk\OnOffSwitch\Includes\SettingsAPI\FieldsAPI::sanitizeCheckbox',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_availability',
            'title'    => __('Available?', TEXT_DOMAIN),
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
            'template' => PLUGIN_PATH . 'templates/admin/fields/switch.php',
        ),
    ),
    array(
        'option_group' => 'on-off-switch',
        'option_name'  => 'onOffSwitch_availableMessage',
        'args'          => array(
            'type'              => 'string',
            'default'           => __('Currently Available', TEXT_DOMAIN),
            'sanitize_callback' => 'sanitize_text_field',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_availableMessage',
            'title'    => __('Message when available', TEXT_DOMAIN),
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
            'template' => PLUGIN_PATH . 'templates/admin/fields/text.php',
        ),
    ),
    array(
        'option_group' => 'on-off-switch',
        'option_name'  => 'onOffSwitch_unavailableMessage',
        'args'          => array(
            'type'              => 'string',
            'default'           => __('Currently Unavailable', TEXT_DOMAIN),
            'sanitize_callback' => 'sanitize_text_field',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_unavailableMessage',
            'title'    => __('Message when unavailable', TEXT_DOMAIN),
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
            'template' => PLUGIN_PATH . 'templates/admin/fields/text.php',
        ),
    ),
    array(
        'option_group' => 'on-off-switch',
        'option_name'  => 'onOffSwitch_availableColor',
        'args'          => array(
            'type'              => 'string',
            'default'           => '#4caf50',
            'sanitize_callback' => 'sanitize_text_field',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_availableColor',
            'title'    => __('Color when available', TEXT_DOMAIN),
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
            'template' => PLUGIN_PATH . 'templates/admin/fields/colorPicker.php',
        ),
    ),
    array(
        'option_group' => 'on-off-switch',
        'option_name'  => 'onOffSwitch_unavailableColor',
        'args'          => array(
            'type'              => 'string',
            'default'           => '#f44336',
            'sanitize_callback' => 'sanitize_text_field',
        ),
        'field' => array(
            'id'       => 'onOffSwitch_unavailableColor',
            'title'    => __('Color when unavailable', TEXT_DOMAIN),
            'page'     => 'on-off-switch',
            'section'  => 'onOffSwitch_settings_sections',
            'template' => PLUGIN_PATH . 'templates/admin/fields/colorPicker.php',
        ),
    ),
);
