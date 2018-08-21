<?php
/**
 * Template for the Switch Field
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
$checked = ($value) ? 'checked' : '';
?>
<input
    type="checkbox"
    value="1"
    name="<?php esc_attr_e($name); ?>"
    id="<?php esc_attr_e($field['id']); ?>"
    <?php esc_attr_e($checked); ?>
/>