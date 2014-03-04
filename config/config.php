<?php

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
 * Content elements
 */
$GLOBALS['TL_CTE']['fader'] = array(
	'faderStart'     => 'Fader\\faderStart',
	'faderStop'      => 'Fader\\faderStop'
);

/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'faderStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'faderStop';