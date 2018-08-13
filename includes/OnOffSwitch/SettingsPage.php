<?php
/**
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

namespace WPElk\OnOffSwitch\Includes\OnOffSwitch;

use const WPElk\OnOffSwitch\PLUGIN_PATH;
use WPElk\OnOffSwitch\Includes\SettingsAPI\SettingsAPI;

class SettingsPage
{
    public function register()
    {
        $config_path = PLUGIN_PATH . '/config/settings.php';
        $config = include_once $config_path;
        $settingsAPI = new SettingsAPI();
        $settingsAPI->registerSettings($config);
    }
}
