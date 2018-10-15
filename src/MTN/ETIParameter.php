<?php

namespace eskandari\MTN;

class ETIParameter
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return ETIParameter
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ETIParameter
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}
