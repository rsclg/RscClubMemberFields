<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2011
 * @author     Cliff Parnitzky
 * @package    RscClubMemberFields
 * @license    LGPL
 * @filesource
 */

$clubPalette = "{club_legend},xt_club_membernumber,xt_club_function,xt_club_license_bdr_license,xt_club_license_bdr_license_nr,xt_club_license_dtu_startpass,xt_club_license_dtu_startpass_nr,xt_club_license_rtf_card,xt_club_license_rtf_card_nr,xt_club_swimflat;";
if (strpos($GLOBALS['TL_DCA']['tl_member']['palettes']['default'], 'language;') === false) {
	$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] .= ';' . $clubPalette;
} else {
	$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace('language;','language;' . $clubPalette, $GLOBALS['TL_DCA']['tl_member']['palettes']['default']);
}

$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_membernumber'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_membernumber'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('feEditable' => false,'feViewable' => false,'feGroup' => 'club','tl_class' => 'w50','mandatory' => true,'rgxp' => 'digit', 'unique' => true, 'alwaysSave' => true),
	'load_callback'           => array(array('RscClubMemberFields', 'getMemberNumber'))
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_function'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_function'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_license_bdr_license'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_bdr_license'],
	'default'                 => 'Nein',	
	'exclude'                 => true,
	'search'                  => false,
	'filter'                  => true,
	'inputType'               => 'select',
	'options'                 => array('Ja' => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Ja'],'Nein' => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Nein']),	
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'w50','mandatory' => true)
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_license_bdr_license_nr'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_bdr_license_nr'],
	'exclude'                 => true,
	'search'                  => true,
	'filter'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_license_dtu_startpass'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_dtu_startpass'],
	'default'                 => 'Nein',	
	'exclude'                 => true,
	'search'                  => false,
	'filter'                  => true,
	'inputType'               => 'select',
	'options'                 => array('Ja' => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Ja'],'Nein' => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Nein']),	
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'w50','mandatory' => true)
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_license_dtu_startpass_nr'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_dtu_startpass_nr'],
	'exclude'                 => true,
	'search'                  => true,
	'filter'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_license_rtf_card'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_rtf_card'],
	'default'                 => 'Nein',	
	'exclude'                 => true,
	'search'                  => false,
	'filter'                  => true,
	'inputType'               => 'select',
	'options'                 => array('Ja' => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Ja'],'Nein' => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Nein']),	
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'w50','mandatory' => true)
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_license_rtf_card_nr'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_license_rtf_card_nr'],
	'exclude'                 => true,
	'search'                  => true,
	'filter'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'w50')
);
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_swimflat'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['xt_club_swimflat'],
	'exclude'                 => true,
	'search'                  => false,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('feEditable' => false,'feViewable' => true,'feGroup' => 'club','tl_class' => 'clr w50')
);

// Default Werte in der Mitgliederverwaltung
$GLOBALS['TL_DCA']['tl_member']['fields']['country']['default'] = 'de';
$GLOBALS['TL_DCA']['tl_member']['fields']['language']['default'] = 'de';
$GLOBALS['TL_DCA']['tl_member']['fields']['groups']['default'] = array(7); // ID der Gruppe 'RSC Mitglied'

 
// Pflichtfelder in der Mitgliederverwaltung
$mandatoryFields = array('firstname', 'lastname', 'dateOfBirth', 'gender', 'street', 'postal', 'city', 'country', 'email', 'language', 'groups');
foreach ($mandatoryFields as $fieldName) {
	$GLOBALS['TL_DCA']['tl_member']['fields'][$fieldName]['eval']['mandatory'] = true;
}

// Anpassung Filter
$GLOBALS['TL_DCA']['tl_member']['fields']['gender']['filter'] = true;
$GLOBALS['TL_DCA']['tl_member']['fields']['start']['filter'] = true;
$GLOBALS['TL_DCA']['tl_member']['fields']['start']['flag'] = 7;
$GLOBALS['TL_DCA']['tl_member']['fields']['stop']['filter'] = true;
$GLOBALS['TL_DCA']['tl_member']['fields']['stop']['flag'] = 7;
$GLOBALS['TL_DCA']['tl_member']['fields']['country']['filter'] = false;
$GLOBALS['TL_DCA']['tl_member']['fields']['language']['filter'] = false;
$GLOBALS['TL_DCA']['tl_member']['fields']['login']['filter'] = false;

// Anpassung Suche
$GLOBALS['TL_DCA']['tl_member']['fields']['gender']['search'] = true;

// Anpassung Sortierung
$GLOBALS['TL_DCA']['tl_member']['fields']['gender']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_member']['fields']['gender']['flag'] = 1;
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_membernumber']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_member']['fields']['xt_club_membernumber']['flag'] = 11;
$GLOBALS['TL_DCA']['tl_member']['fields']['company']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_member']['fields']['country']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_member']['fields']['helpdesk_role']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_member']['fields']['state']['sorting'] = false;
$GLOBALS['TL_DCA']['tl_member']['fields']['stop']['sorting'] = true;
$GLOBALS['TL_DCA']['tl_member']['fields']['stop']['flag'] = 6;

/**
 * Class RscClubMemberFields
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Cliff Parnitzky 2011
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class RscClubMemberFields extends tl_member
{
	/**
	 * Returns the member number, if no one is set the next free number will be searched in database
	 */
	public function getMemberNumber($varValue, DataContainer $dc) {
		if ($varValue != null && $varValue > 0) {
			return $varValue;
		}
		
		// seems there is not member number set, so select the next free number from database
		$lastMemberNumber = $this->Database->prepare("SELECT max(xt_club_membernumber) as max FROM tl_member")->execute()->next()->max;
		
		return $lastMemberNumber + 1;
	}
}

?>