<?php
namespace WPElk\OnOffSwitch\Config;

return array(
    array(
        'options_group' => 'onOffSwitch',
        'options_name'  => 'onOffSwitch_availability',
        'args'          => array(
            'type'    => 'bool',
            'default' => false,
        )
    ),
    array(
        'options_group' => 'onOffSwitch',
        'options_name'  => 'onOffSwitch_availableMessage',
        'args'          => array(
            'type'    => 'string',
            'default' => 'Currently Available',
        )
    ),
    array(
        'options_group' => 'onOffSwitch',
        'options_name'  => 'onOffSwitch_unavailableMessage',
        'args'          => array(
            'type'    => 'string',
            'default' => 'Currently Unavailable',
        )
    ),
    array(
        'options_group' => 'onOffSwitch',
        'options_name'  => 'onOffSwitch_availableColor',
        'args'          => array(
            'type'    => 'string',
            'default' => '#4caf50',
        )
    ),
    array(
        'options_group' => 'onOffSwitch',
        'options_name'  => 'onOffSwitch_unavailableColor',
        'args'          => array(
            'type'    => 'string',
            'default' => '#f44336',
        )
    ),
);
