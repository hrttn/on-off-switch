<?php
/**
 * Communicate with the WordPress Options API
 * Add a Submenu in the admin
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

class SubMenusAPI
{
    protected $submenu;

    public function __construct(array $submenu)
    {
        $this->setSubmenu($submenu);

        $this->addSubmenuPages();
    }
    
    public function getSubmenu()
    {
        return $this->submenu;
    }

    public function setSubmenu(array $submenu)
    {
        $this->submenu = $submenu;
    }

    public function addSubmenuPages()
    {
        $submenu = $this->getSubmenu();

        add_submenu_page(
            $submenu['parent_slug'],
            $submenu['page_title'],
            $submenu['menu_title'],
            $submenu['capability'],
            $submenu['menu_slug'],
            array($this, 'displaySubmenuTemplate')
        );
        
    }

    public function displaySubmenuTemplate()
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        $submenu   = $this->getSubmenu();
        $template  = $submenu['template'];

        include $template;
    }

}
