<?php

namespace eskandari\MTN;

class T_AccountLimitData
{

    /**
     * @var string $LimitType
     */
    protected $LimitType = null;

    /**
     * @var string $LimitValue
     */
    protected $LimitValue = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getLimitType()
    {
        return $this->LimitType;
    }

    /**
     * @param string $LimitType
     * @return T_AccountLimitData
     */
    public function setLimitType($LimitType)
    {
        $this->LimitType = $LimitType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLimitValue()
    {
        return $this->LimitValue;
    }

    /**
     * @param string $LimitValue
     * @return T_AccountLimitData
     */
    public function setLimitValue($LimitValue)
    {
        $this->LimitValue = $LimitValue;
        return $this;
    }

}
