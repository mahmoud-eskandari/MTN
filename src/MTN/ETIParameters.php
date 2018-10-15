<?php

namespace eskandari\MTN;

class ETIParameters
{

    /**
     * @var ETIParameter[] $Parameter
     */
    protected $Parameter = null;


    public function __construct()
    {

    }

    /**
     * @return ETIParameter[]
     */
    public function getParameter()
    {
        return $this->Parameter;
    }

    /**
     * @param ETIParameter[] $Parameter
     * @return ETIParameters
     */
    public function setParameter(array $Parameter = null)
    {
        $this->Parameter = $Parameter;
        return $this;
    }

}
