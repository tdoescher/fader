<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Torben Döscher
 * @author     Torben Döscher <mail@tdoescher.de>
 * @package    Fader
 * @license    LGPL
 * @filesource
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['faderDelay'] = array('Fade-Intervall', 'Der Zeitraum in Millisekunden zwischen den Fades (1000 = 1s). 0 deaktiviert den automatischen Wechsel.');
$GLOBALS['TL_LANG']['tl_content']['faderSpeed'] = array('Übergangsgeschwindigkeit', 'Die Übergangsgeschwindigkeit in Millisekunden (1000 = 1s). Standard: 300.');
$GLOBALS['TL_LANG']['tl_content']['faderStartFade'] = array('Fade-Versatz', 'Den Fader mit einer bestimmten Folie beginnen (die Zählung beginnt bei 0).');
$GLOBALS['TL_LANG']['tl_content']['faderContinuous'] = array('Kontinuierlich', 'Einen kontinuierlichen Fader erstellen (beim Erreichen des Endes von vorne beginnen).');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['fader_legend'] = 'Fader-Einstellungen';

/**
 * Infos
 */
$GLOBALS['TL_LANG']['tl_content']['fader_info'] = '<em>jQuery</em> und das <em>j_fader</em>-Template muss im Seitenlayout aktiviert bzw. eingebunden sein.';

?>