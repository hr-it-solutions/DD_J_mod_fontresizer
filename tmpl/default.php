<?php
/**
 * @package    DD_Mod_FontResizer
 *
 * @author     HR IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2017 - 2017 Didldu e.K. | HR IT-Solutions
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

?>
<div class="mod_dd_fontresizer">
    <ul>
        <li>
            <a href="javascript:void(0)" id="resetFont" data-selector="<?php echo $jqueryselector; ?>"
               title="<?php echo JText::_('MOD_DD_FONTRESIZER_RESET'); ?>">
                <span class="icon-zoom-out"></span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" id="increaseFont" data-selector="<?php echo $jqueryselector; ?>"
               title="<?php echo JText::_('MOD_DD_FONTRESIZER_INCREASE'); ?>">
                <span class="icon-zoom-in"></span>
            </a>
        </li>
    </ul>
</div>
