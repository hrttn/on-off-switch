<?php
/**
 * Main Switch Class
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

class OnOffSwitch
{
    protected $availability;
    protected $message;
    protected $color;

    public function register()
    {
        $this->populate();
        add_shortcode('on_off_switch', array($this, 'shortcode'));
    }

    protected function populate()
    {
        $this->populateAvailability();
        $this->populateMessage();
        $this->populateColor();
    }

    protected function populateAvailability()
    {
        $availabity = (bool) get_option('onOffSwitch_availability');
        $this->setAvailability($availabity);
    }

    protected function populateMessage()
    {
        $isAvailable = $this->getAvailability();

        $availableMessage   = (string) get_option('onOffSwitch_availableMessage');
        $unavailableMessage = (string) get_option('onOffSwitch_unavailableMessage');

        $isAvailable
            ? $this->setMessage($availableMessage)
            : $this->setMessage($unavailableMessage);
    }

    protected function populateColor()
    {
        $isAvailable = $this->getAvailability();

        $availableColor   = (string) get_option('onOffSwitch_availableColor');
        $unavailableColor = (string) get_option('onOffSwitch_unavailableColor');

        $isAvailable
            ? $this->setColor($availableColor)
            : $this->setColor($unavailableColor);
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability)
    {
        $this->availability = $availability;
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
        include PLUGIN_PATH . '/templates/front/switch-shortcode.php';
    }
}
