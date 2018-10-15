<?php

namespace eskandari\MTN;

class EMI_TransactionResponseType extends EMI_CommandResponseType
{

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @param string $Id
     * @param int $ResultCode
     * @param string $ErrorMsg
     * @param string $TransactionId
     */
    public function __construct($Id, $ResultCode, $ErrorMsg, $TransactionId)
    {
        parent::__construct($Id, $ResultCode, $ErrorMsg);
        $this->TransactionId = $TransactionId;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return EMI_TransactionResponseType
     */
    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;
        return $this;
    }

}
