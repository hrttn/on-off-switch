<?php
/**
 * Init class that register all the classes in the plugin
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

class OnOffSwitch {
    protected $availabity;
    protected $message;
    protected $color;

    public function __construct()
    {
       $this->setAvailability(true);
       $this->setMessage('Yup');
       $this->setColor('#DDDDDD');
    }

    public function register()
    {
        add_shortcode('on_off_switch', array($this, 'shortcode'));
    }

    public function getAvailability()
    {
        return $this->availabity;
    }

    public function setAvailability(bool $availabity)
    {
        $this->availability = $availabity;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }
    
    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function shortcode()
    {
        ob_start();
        include PLUGIN_PATH . '/templates/switch-shortcode.php';;
        
        return ob_get_clean();
    }
}
