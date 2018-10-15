<?php

namespace eskandari\MTN;

class EMI_CommandResponseType
{

    /**
     * @var string $Id
     */
    protected $Id = null;

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
     * @param string $Id
     * @param int $ResultCode
     * @param string $ErrorMsg
     */
    public function __construct($Id, $ResultCode, $ErrorMsg)
    {
        $this->Id = $Id;
        $this->ResultCode = $ResultCode;
        $this->ErrorMsg = $ErrorMsg;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return EMI_CommandResponseType
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return EMI_CommandResponseType
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
     * @return EMI_CommandResponseType
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
     * @return EMI_CommandResponseType
     */
    public function setErrorMsg($ErrorMsg)
    {
        $this->ErrorMsg = $ErrorMsg;
        return $this;
    }

}
