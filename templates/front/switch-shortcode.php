<?php
/**
 * Template for the on-off shortcode
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

namespace WPElk\OnOffSwitch\Templates\Front;
?>
<span style="color: <?php esc_attr_e($this->getColor()); ?>" class="on-off-switch">
    <?php esc_html_e($this->getMessage(), 'on-off-switch'); ?>
</span>
