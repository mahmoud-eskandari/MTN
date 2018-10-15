<?php

namespace eskandari\MTN;

class EMI_CompanyAccountRequestType extends EMI_CommandRequestType
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
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var string $PaidType
     */
    protected $PaidType = null;

    /**
     * @var float $ReceivableDiscount
     */
    protected $ReceivableDiscount = null;

    /**
     * @var float $OfferedDiscount
     */
    protected $OfferedDiscount = null;

    /**
     * @param string $CCUNAME
     * @param string $CCUPin
     * @param int $StartingNumber
     * @param int $NumberOfRecords
     * @param int $CompanyId
     * @param string $PaidType
     * @param float $ReceivableDiscount
     * @param float $OfferedDiscount
     */
    public function __construct($CCUNAME, $CCUPin, $StartingNumber, $NumberOfRecords, $CompanyId, $PaidType, $ReceivableDiscount, $OfferedDiscount)
    {
        parent::__construct($CCUNAME, $CCUPin);
        $this->StartingNumber = $StartingNumber;
        $this->NumberOfRecords = $NumberOfRecords;
        $this->CompanyId = $CompanyId;
        $this->PaidType = $PaidType;
        $this->ReceivableDiscount = $ReceivableDiscount;
        $this->OfferedDiscount = $OfferedDiscount;
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
     * @return EMI_CompanyAccountRequestType
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
     * @return EMI_CompanyAccountRequestType
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
        return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return EMI_CompanyAccountRequestType
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
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
     * @return EMI_CompanyAccountRequestType
     */
    public function setAccountCode($AccountCode)
    {
        $this->AccountCode = $AccountCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaidType()
    {
        return $this->PaidType;
    }

    /**
     * @param string $PaidType
     * @return EMI_CompanyAccountRequestType
     */
    public function setPaidType($PaidType)
    {
        $this->PaidType = $PaidType;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceivableDiscount()
    {
        return $this->ReceivableDiscount;
    }

    /**
     * @param float $ReceivableDiscount
     * @return EMI_CompanyAccountRequestType
     */
    public function setReceivableDiscount($ReceivableDiscount)
    {
        $this->ReceivableDiscount = $ReceivableDiscount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOfferedDiscount()
    {
        return $this->OfferedDiscount;
    }

    /**
     * @param float $OfferedDiscount
     * @return EMI_CompanyAccountRequestType
     */
    public function setOfferedDiscount($OfferedDiscount)
    {
        $this->OfferedDiscount = $OfferedDiscount;
        return $this;
    }

}
