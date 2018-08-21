<?php
/**
 * Template for the section page
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

?>
<p>
<?php
esc_html_e(
    'Select the options for your On/Off Switch that will be displayed on your website.',
    TEXT_DOMAIN
);
?>
</p>