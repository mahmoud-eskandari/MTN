<?php

namespace eskandari\MTN;

class EMI_CommandRequestType
{

    /**
     * @var string $CCUNAME
     */
    protected $CCUNAME = null;

    /**
     * @var string $CCUPin
     */
    protected $CCUPin = null;

    /**
     * @param string $CCUNAME
     * @param string $CCUPin
     */
    public function __construct($CCUNAME, $CCUPin)
    {
        $this->CCUNAME = $CCUNAME;
        $this->CCUPin = $CCUPin;
    }

    /**
     * @return string
     */
    public function getCCUNAME()
    {
        return $this->CCUNAME;
    }

    /**
     * @param string $CCUNAME
     * @return EMI_CommandRequestType
     */
    public function setCCUNAME($CCUNAME)
    {
        $this->CCUNAME = $CCUNAME;
        return $this;
    }

    /**
     * @return string
     */
    public function getCCUPin()
    {
        return $this->CCUPin;
    }

    /**
     * @param string $CCUPin
     * @return EMI_CommandRequestType
     */
    public function setCCUPin($CCUPin)
    {
        $this->CCUPin = $CCUPin;
        return $this;
    }

}
