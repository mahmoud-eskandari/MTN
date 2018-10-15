<?php

namespace eskandari\MTN;

class EMI_AccountSearchResponseType extends EMI_CommandResponseType
{

    /**
     * @var T_AccountBalanceData[] $Account
     */
    protected $Account = null;

    /**
     * @var int $StartingNumber
     */
    protected $StartingNumber = null;

    /**
     * @var int $FinishingNumber
     */
    protected $FinishingNumber = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    /**
     * @param string $Id
     * @param int $ResultCode
     * @param string $ErrorMsg
     * @param int $StartingNumber
     * @param int $FinishingNumber
     * @param int $Size
     */
    public function __construct($Id, $ResultCode, $ErrorMsg, $StartingNumber, $FinishingNumber, $Size)
    {
        parent::__construct($Id, $ResultCode, $ErrorMsg);
        $this->StartingNumber = $StartingNumber;
        $this->FinishingNumber = $FinishingNumber;
        $this->Size = $Size;
    }

    /**
     * @return T_AccountBalanceData[]
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param T_AccountBalanceData[] $Account
     * @return EMI_AccountSearchResponseType
     */
    public function setAccount(array $Account = null)
    {
        $this->Account = $Account;
        return $this;
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
     * @return EMI_AccountSearchResponseType
     */
    public function setStartingNumber($StartingNumber)
    {
        $this->StartingNumber = $StartingNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getFinishingNumber()
    {
        return $this->FinishingNumber;
    }

    /**
     * @param int $FinishingNumber
     * @return EMI_AccountSearchResponseType
     */
    public function setFinishingNumber($FinishingNumber)
    {
        $this->FinishingNumber = $FinishingNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     * @return EMI_AccountSearchResponseType
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
        return $this;
    }

}
