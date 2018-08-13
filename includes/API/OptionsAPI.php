<?php
/**
 * Communicate with the WordPress Options API
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

namespace WPElk\OnOffSwitch\Includes\API;

class MenuAPI
{

    public function registerSettings(array $settings)
    {
        foreach ($settings as $setting) {
            register_setting(
                $setting['option_group'],
                $setting['name'],
                $setting['args']
            );
        }
    }
}
