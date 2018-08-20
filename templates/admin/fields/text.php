<?php
/**
 * Template for the Text Field
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

namespace WPElk\OnOffSwitch\Templates\Admin\Fields;

?>
 <input
    type="text" value="<?php esc_attr_e($value); ?>"
    name="<?php esc_attr_e($name); ?>"
    id="<?php esc_attr_e($field['id']); ?>"
/>