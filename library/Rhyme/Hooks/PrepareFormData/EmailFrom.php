<?php

/**
 * Copyright (C) 2017 Rhyme Digital, LLC.
 * 
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Rhyme\Hooks\PrepareFormData;


/**
 * Class EmailFrom
 */
class EmailFrom extends \Controller
{

    /**
     * Replace "from" email
     * @return void
     */
    public function run($arrSubmitted, $arrLabels, $objForm)
    {
		if ($objForm->sendViaEmail && $objForm->fromEmail && $this->isValidEmailAddress($objForm->fromEmail))
		{
			$GLOBALS['savedAdminEmail'] = $GLOBALS['TL_ADMIN_EMAIL'];
			$GLOBALS['savedAdminName'] = $GLOBALS['TL_ADMIN_NAME'];
			$GLOBALS['TL_ADMIN_EMAIL'] = $objForm->fromEmail;
		}
    }

}
