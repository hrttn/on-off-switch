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

namespace WPElk\OnOffSwitch\Includes\SettingsAPI;

class SettingsAPI
{
    protected $submenuTemplate = '';
    protected $sectionTemplate = '';


    public function getSubmenuTemplate()
    {
        return $this->submenuTemplate;
    }

    public function setSubmenuTemplate(string $template)
    {
        $this->submenuTemplate = $template;
    }

    public function getSectionTemplate()
    {
        return $this->sectionTemplate;
    }

    public function setSectionTemplate(string $template)
    {
        $this->sectionTemplate = $template;
    }

    public function addSubmenuPages(array $pages)
    {
        foreach ($pages as $page) {
            $this->setSubmenuTemplate($page['template']);

            add_submenu_page(
                $page['parent_slug'],
                $page['page_title'],
                $page['menu_title'],
                $page['capability'],
                $page['menu_slug'],
                array($this, 'displaySubmenuTemplate')
            );
        }
    }

    public function registerSettings(array $settings)
    {
        foreach ($settings as $setting) {
            register_setting(
                $setting['option_group'],
                $setting['option_name'],
                $setting['args']
            );
        }
    }

    public function addSections(array $sections)
    {
        foreach ($sections as $section) {
            $this->setSectionTemplate($section['template']);

            add_settings_section(
                $section['id'],
                $section['title'],
                array($this, 'displaySectionTemplate'),
                $section['page']
            );
        }
    }

    public function displaySubmenuTemplate()
    {
        echo "H";
        do_settings_sections('on-off-switch');
    }

    public function displaySectionTemplate()
    {
       echo "DDD";
    }


    
}
