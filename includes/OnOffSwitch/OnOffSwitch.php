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
use const WPElk\OnOffSwitch\TEXT_DOMAIN;


class OnOffSwitch
{
    protected $availability;
    protected $message;
    protected $color;

    public function register()
    {
        $this->populate();
        add_shortcode('on-off-switch', array($this, 'shortcode'));
    }

    protected function populate()
    {
        $this->populateAvailability();
        $this->populateMessage();
        $this->populateColor();
    }

    protected function populateAvailability()
    {
        $availabity = (bool) get_option('onOffSwitch_availability', false);
        $this->setAvailability($availabity);
    }

    protected function populateMessage()
    {
        $isAvailable = $this->getAvailability();

        $availableMessage = (string) get_option(
            'onOffSwitch_availableMessage',
            __('Currently Available', TEXT_DOMAIN)
        );
        $unavailableMessage = (string) get_option(
            'onOffSwitch_unavailableMessage',
            __('Currently Unavailable', TEXT_DOMAIN)
        );

        $isAvailable
            ? $this->setMessage($availableMessage)
            : $this->setMessage($unavailableMessage);
    }

    protected function populateColor()
    {
        $isAvailable = $this->getAvailability();

        $availableColor = (string) get_option(
            'onOffSwitch_availableColor',
            '#4caf50'
        );
        $unavailableColor = (string) get_option(
            'onOffSwitch_unavailableColor',
            '#f44336'
        );

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
        ob_start();
        include PLUGIN_PATH . '/templates/front/switch-shortcode.php';
        $output = ob_get_clean();
        return $output;
    }
}
