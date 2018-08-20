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
        if (!current_user_can('manage_options')) {
            return;
        }

        include $this->getSubmenuTemplate();
    }

    public function displaySectionTemplate()
    {
        include $this->getSectionTemplate();
    }
}
