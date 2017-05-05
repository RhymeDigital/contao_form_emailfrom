<?php

/**
 * Copyright (C) 2017 Rhyme Digital, LLC.
 * 
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Rhyme\Hooks\ProcessFormData;


/**
 * Class ResetAdminEmail
 */
class ResetAdminEmail extends \Controller
{

    /**
     * Reset admin email
     * @return void
     */
    public function run($arrData, $arrFormData, $arrFiles, $arrLabels, $objForm)
    {
		if ($objForm->sendViaEmail && $objForm->fromEmail && $this->isValidEmailAddress($objForm->fromEmail) && $GLOBALS['savedAdminEmail'])
		{
			$GLOBALS['TL_ADMIN_EMAIL'] = $GLOBALS['savedAdminEmail'];
			$GLOBALS['TL_ADMIN_NAME'] = $GLOBALS['savedAdminName'];
		}
    }

}
