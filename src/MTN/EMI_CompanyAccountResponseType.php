<?php

namespace eskandari\MTN;

class EMI_CompanyAccountResponseType extends EMI_CommandResponseType
{

    /**
     * @param string $Id
     * @param int $ResultCode
     * @param string $ErrorMsg
     */
    public function __construct($Id, $ResultCode, $ErrorMsg)
    {
        parent::__construct($Id, $ResultCode, $ErrorMsg);
    }

}
