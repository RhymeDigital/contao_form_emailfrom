<?php

/**
 * Copyright (C) 2017 Rhyme Digital, LLC.
 * 
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */



/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['prepareFormData'][]             = array('Rhyme\Hooks\PrepareFormData\EmailFrom', 'run');
$GLOBALS['TL_HOOKS']['processFormData'][]             = array('Rhyme\Hooks\ProcessFormData\ResetAdminEmail', 'run');

