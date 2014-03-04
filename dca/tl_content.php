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

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_fader', 'showFaderInfo');

$GLOBALS['TL_DCA']['tl_content']['fields']['faderDelay'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['faderDelay'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '5000'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['faderSpeed'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['faderSpeed'],
	'default'                 => 300,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '1000'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['faderStartFade'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['faderStartFade'],
	'default'                 => 0,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['faderContinuous'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['faderContinuous'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['faderStart'] = '{type_legend},type,headline;{fader_legend},faderDelay,faderSpeed,faderStartFade,faderContinuous;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['faderStop'] = '{type_legend},type,headline;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';

class tl_content_fader extends tl_content {
	public function showFaderInfo($dc) {
		if($_POST || Input::get('act') != 'edit') {
			return;
		}
		
		if(!$this->User->hasAccess('themes', 'modules') || !$this->User->hasAccess('layout', 'themes')) {
			return;
		}
		
		$objCte = ContentModel::findByPk($dc->id);
		
		if($objCte === null) {
			return;
		}
		
		if($objCte->type == 'faderStart' || $objCte->type == 'faderStop') {
			Message::addInfo($GLOBALS['TL_LANG']['tl_content']['fader_info']);
		}
	}
}