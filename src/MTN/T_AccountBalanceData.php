<?php

namespace eskandari\MTN;

class T_AccountBalanceData
{

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $Amount
     */
    protected $Amount = null;

    /**
     * @var T_AccountLimitData[] $Limits
     */
    protected $Limits = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var string $AccountType
     */
    protected $AccountType = null;

    /**
     * @var float $OfferedDiscount
     */
    protected $OfferedDiscount = null;

    /**
     * @var float $ReceivableDiscount
     */
    protected $ReceivableDiscount = null;


    public function __construct()
    {

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
     * @return T_AccountBalanceData
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param int $Amount
     * @return T_AccountBalanceData
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return T_AccountLimitData[]
     */
    public function getLimits()
    {
        return $this->Limits;
    }

    /**
     * @param T_AccountLimitData[] $Limits
     * @return T_AccountBalanceData
     */
    public function setLimits(array $Limits = null)
    {
        $this->Limits = $Limits;
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
     * @return T_AccountBalanceData
     */
    public function setAccountCode($AccountCode)
    {
        $this->AccountCode = $AccountCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }

    /**
     * @param string $AccountType
     * @return T_AccountBalanceData
     */
    public function setAccountType($AccountType)
    {
        $this->AccountType = $AccountType;
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
     * @return T_AccountBalanceData
     */
    public function setOfferedDiscount($OfferedDiscount)
    {
        $this->OfferedDiscount = $OfferedDiscount;
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
     * @return T_AccountBalanceData
     */
    public function setReceivableDiscount($ReceivableDiscount)
    {
        $this->ReceivableDiscount = $ReceivableDiscount;
        return $this;
    }

}
