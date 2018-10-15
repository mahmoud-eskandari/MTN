<?php

namespace eskandari\MTN;

class EMI_AccountSearchRequestType extends EMI_CommandRequestType
{

    /**
     * @var int $StartingNumber
     */
    protected $StartingNumber = null;

    /**
     * @var int $NumberOfRecords
     */
    protected $NumberOfRecords = null;

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @param string $CCUNAME
     * @param string $CCUPin
     */
    public function __construct($CCUNAME, $CCUPin)
    {
        parent::__construct($CCUNAME, $CCUPin);
    }

    /**
     * @return int
     */
    public function getStartingNumber()
    {
        return $this->StartingNumber;
    }

    /**
     * @param int $StartingNumber
     * @return EMI_AccountSearchRequestType
     */
    public function setStartingNumber($StartingNumber)
    {
        $this->StartingNumber = $StartingNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRecords()
    {
        return $this->NumberOfRecords;
    }

    /**
     * @param int $NumberOfRecords
     * @return EMI_AccountSearchRequestType
     */
    public function setNumberOfRecords($NumberOfRecords)
    {
        $this->NumberOfRecords = $NumberOfRecords;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return EMI_AccountSearchRequestType
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return EMI_AccountSearchRequestType
     */
    public function setAccountCode($AccountCode)
    {
        $this->AccountCode = $AccountCode;
        return $this;
    }

}
