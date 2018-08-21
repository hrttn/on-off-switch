<?php
/**
 * Template for the submenu page
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

namespace WPElk\OnOffSwitch\Templates\Admin;

use const WPElk\OnOffSwitch\TEXT_DOMAIN;

 
settings_errors('onOffSwitch_messages');
?>

<div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form action="options.php" method="post">
    <?php
        settings_fields('on-off-switch');
        do_settings_sections('on-off-switch');
        submit_button(__('Save Settings', TEXT_DOMAIN));
    ?>
    </form>
</div>
 