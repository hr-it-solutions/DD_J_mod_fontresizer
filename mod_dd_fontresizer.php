<?php
/**
 * @package    DD_Mod_FontResizer
 *
 * @author     HR IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2017 - 2017 Didldu e.K. | HR IT-Solutions
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

$jqueryselector  = htmlspecialchars($params->get('jqueryselector'), ENT_QUOTES, 'UTF-8');

JHTML::_('script', 'mod_dd_fontresizer/dd_fontresizer.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'mod_dd_fontresizer/dd_fontresizer.min.css', array('version' => 'auto', 'relative' => true));

require_once JModuleHelper::getLayoutPath('mod_dd_fontresizer', $params->get('layout', 'default'));
