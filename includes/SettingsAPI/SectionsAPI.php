<?php
/**
 * Communicate with the WordPress Options API
 * Create a Section on a menu/submenu page
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

class SectionsAPI
{
    protected $section;

    public function getSection()
    {
        return $this->section;
    }

    public function setSection(array $section)
    {
        $this->section = $section;
    }

    public function __construct(array $section)
    {
        $this->setSection($section);

        $this->addSection();
    }

    public function addSection()
    {
        $section = $this->getSection();

        add_settings_section(
            $section['id'],
            $section['title'],
            array($this, 'displaySectionTemplate'),
            $section['page']
        );
    }

    public function displaySectionTemplate()
    {
        $section  = $this->getSection();
        $template = $section['template'];
        
        include $template;
    }

}
