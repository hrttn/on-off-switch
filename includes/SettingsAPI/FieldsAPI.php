<?php
/**
 * Communicate with the WordPress Options API
 * to create Fields.
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

namespace WPElk\OnOffSwitch\Includes\SettingsAPI;

class FieldsAPI
{
    protected $settings;
    protected $fields;

    public function getSettings()
    {
        return $this->settings;
    }

    public function setSettings(array $settings)
    {
        $this->settings = $settings;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    public function __construct( array $settings )
    {
        $this->setSettings($settings);
        $this->setFields($settings['field']);

        $this->registerSettings();
        $this->addFields();
    }

    public function registerSettings()
    {
        $settings = $this->getSettings();
        
        register_setting(
            $settings['option_group'],
            $settings['option_name'],
            $settings['args']
        );
    }

    public function addFields()
    {
        $field = $this->getFields();

        add_settings_field(
            $field['id'],
            $field['title'],
            array($this, 'displayFieldTemplate'),
            $field['page'],
            $field['section']
        );
    }

  
    public function displayFieldTemplate()
    {
        $settings = $this->getSettings();
        $name     = $settings['option_name'];
        $value    = get_option($name);

        $field = $this->getFields();
        $template = $field['template'];
        include $template;
    }

    public static function sanitizeCheckbox($input)
    {
        return isset($input);
    }
}
