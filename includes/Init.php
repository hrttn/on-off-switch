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

namespace WPElk\OnOffSwitch\Includes;

final class Init
{
    public static function getServices()
    {
        return array(
            OnOffSwitch\OnOffSwitch::class,
        );
    }

    public static function registerServices()
    {
        foreach (self::getServices() as $class) {
            $service = new $class();
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }
}

