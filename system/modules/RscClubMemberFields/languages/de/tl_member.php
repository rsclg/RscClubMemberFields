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

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_member']['xt_club_membernumber']             = array('Mitgliedernummer', 'Geben Sie die Mitgliedernummer an.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_function']                 = array('Funktion&#40;en&#41;', 'Geben Sie die Funktion&#40;en&#41; im Verein an.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_bdr_license']      = array('BDR-Lizenz', 'Geben Sie an, ob das Mitglied eine BDR-Lizenz hat.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_bdr_license_nr']   = array('BDR-Lizenz - Nummer', 'Geben Sie die Nummer der BDR-Lizenz an.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_dtu_startpass']    = array('DTU-Startpass', 'Geben Sie an, ob das Mitglied einen DTU-Startpass hat.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_dtu_startpass_nr'] = array('DTU-Startpass - Nummer', 'Geben Sie die Nummer des DTU-Startpass an.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_rtf_card']         = array('RTF-Wertungskarte', 'Geben Sie an, ob das Mitglied eine RTF-Wertungskarte hat.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_rtf_card_nr']      = array('RTF-Wertungskarte - Nummer', 'Geben Sie die Nummer der RTF-Wertungskarte an.');
$GLOBALS['TL_LANG']['tl_member']['xt_club_swimflat']                 = array('Schwimmpauschale', 'Geben Sie an, ob die Schwimmpauschale gebucht ist.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_member']['club_legend'] = 'Vereinsdaten';

/**
 * Combobox select values
 */
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Ja']   = 'Ja';
$GLOBALS['TL_LANG']['tl_member']['xt_club_license_select']['Nein'] = 'Nein';

?>