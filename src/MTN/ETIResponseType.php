<?php

namespace eskandari\MTN;

class ETIResponseType
{

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var string $OrigResponseMessage
     */
    protected $OrigResponseMessage = null;

    /**
     * @var string $TermResponseMessage
     */
    protected $TermResponseMessage = null;

    /**
     * @var CommandStatusType $CommandStatus
     */
    protected $CommandStatus = null;

    /**
     * @var int $ResultCode
     */
    protected $ResultCode = null;

    /**
     * @var string $ErrorMsg
     */
    protected $ErrorMsg = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
        $this->ResultCode = $ResultCode;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return ETIResponseType
     */
    public function setTransactionID($TransactionID)
    {
        $this->TransactionID = $TransactionID;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigResponseMessage()
    {
        return $this->OrigResponseMessage;
    }

    /**
     * @param string $OrigResponseMessage
     * @return ETIResponseType
     */
    public function setOrigResponseMessage($OrigResponseMessage)
    {
        $this->OrigResponseMessage = $OrigResponseMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getTermResponseMessage()
    {
        return $this->TermResponseMessage;
    }

    /**
     * @param string $TermResponseMessage
     * @return ETIResponseType
     */
    public function setTermResponseMessage($TermResponseMessage)
    {
        $this->TermResponseMessage = $TermResponseMessage;
        return $this;
    }

    /**
     * @return CommandStatusType
     */
    public function getCommandStatus()
    {
        return $this->CommandStatus;
    }

    /**
     * @param CommandStatusType $CommandStatus
     * @return ETIResponseType
     */
    public function setCommandStatus($CommandStatus)
    {
        $this->CommandStatus = $CommandStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }

    /**
     * @param int $ResultCode
     * @return ETIResponseType
     */
    public function setResultCode($ResultCode)
    {
        $this->ResultCode = $ResultCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->ErrorMsg;
    }

    /**
     * @param string $ErrorMsg
     * @return ETIResponseType
     */
    public function setErrorMsg($ErrorMsg)
    {
        $this->ErrorMsg = $ErrorMsg;
        return $this;
    }

}
