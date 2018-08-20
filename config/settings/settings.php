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

return array(
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_availability',
        'args'          => array(
            'type'    => 'bool',
            'default' => false,
        )
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_availableMessage',
        'args'          => array(
            'type'    => 'string',
            'default' => 'Currently Available',
        )
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_unavailableMessage',
        'args'          => array(
            'type'    => 'string',
            'default' => 'Currently Unavailable',
        )
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_availableColor',
        'args'          => array(
            'type'    => 'string',
            'default' => '#4caf50',
        )
    ),
    array(
        'option_group' => 'onOffSwitch',
        'option_name'  => 'onOffSwitch_unavailableColor',
        'args'          => array(
            'type'    => 'string',
            'default' => '#f44336',
        )
    ),
);
