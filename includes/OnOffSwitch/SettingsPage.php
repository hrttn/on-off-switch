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
use WPElk\OnOffSwitch\Includes\SettingsAPI\FieldsAPI;
use WPElk\OnOffSwitch\Includes\SettingsAPI\SectionsAPI;


class SettingsPage
{
    protected $settingsAPI;

    public function __construct()
    {
        $this->settingsAPI = new SettingsAPI();
    }

    public function register()
    {
        add_action('admin_menu', array($this, 'createSubMenu'));
        add_action('admin_init', array($this, 'fillSettingsPages'));
    }

    public function createSubMenu()
    {
        $configPath  = PLUGIN_PATH . 'config/settings/submenu.php';
        $config      = include_once $configPath;

        $this->settingsAPI->addSubmenuPages($config);
    }

    public function fillSettingsPages()
    {
        $this->registerSettings();
        $this->addSections();
    }

    protected function registerSettings()
    {
        $configPath  = PLUGIN_PATH . 'config/settings/settings.php';
        $settings      = include $configPath;

        foreach ($settings as $setting) {
            new FieldsAPI($setting);
        }
    }

    protected function addSections()
    {
        $configPath  = PLUGIN_PATH . 'config/settings/sections.php';
        $sections      = include $configPath;
        
        foreach ($sections as $section) {
            new SectionsAPI($section);
        }
    }
}
