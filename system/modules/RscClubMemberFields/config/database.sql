-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_member`
-- 

CREATE TABLE `tl_member` (
  `xt_club_function` text NULL,
  `xt_club_license_bdr_license` varchar(255) NOT NULL default 'Nein',
  `xt_club_license_bdr_license_nr` text NULL,
  `xt_club_license_dtu_startpass` varchar(255) NOT NULL default 'Nein',
  `xt_club_license_dtu_startpass_nr` text NULL,
  `xt_club_license_rtf_card` varchar(255) NOT NULL default 'Nein',
  `xt_club_license_rtf_card_nr` text NULL,
  `xt_club_membernumber` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
