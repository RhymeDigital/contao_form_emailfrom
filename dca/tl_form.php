<?php

/**
 * Copyright (C) 2017 Rhyme Digital, LLC.
 * 
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_form']['subpalettes']['sendViaEmail'] .= ',fromEmail';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form']['fields']['fromEmail'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form']['fromEmail'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'email', 'tl_class'=>'clr w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
