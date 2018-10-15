<?php

namespace eskandari\MTN;

class EMI_AccountCommandRequestType extends EMI_CommandRequestType
{

    /**
     * @var int $accountID
     */
    protected $accountID = null;

    /**
     * @var int $money
     */
    protected $money = null;

    /**
     * @var string $invoiceId
     */
    protected $invoiceId = null;

    /**
     * @var string $note
     */
    protected $note = null;

    /**
     * @param string $CCUNAME
     * @param string $CCUPin
     * @param int $accountID
     * @param int $money
     */
    public function __construct($CCUNAME, $CCUPin, $accountID, $money)
    {
        parent::__construct($CCUNAME, $CCUPin);
        $this->accountID = $accountID;
        $this->money = $money;
    }

    /**
     * @return int
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * @param int $accountID
     * @return EMI_AccountCommandRequestType
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }

    /**
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param int $money
     * @return EMI_AccountCommandRequestType
     */
    public function setMoney($money)
    {
        $this->money = $money;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param string $invoiceId
     * @return EMI_AccountCommandRequestType
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return EMI_AccountCommandRequestType
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

}
