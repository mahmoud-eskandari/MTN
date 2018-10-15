<?php

namespace eskandari\MTN;

class ETIRequestType
{

    /**
     * @var string $RequestMessage
     */
    protected $RequestMessage = null;

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ETIParameters[] $Parameters
     */
    protected $Parameters = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getRequestMessage()
    {
        return $this->RequestMessage;
    }

    /**
     * @param string $RequestMessage
     * @return ETIRequestType
     */
    public function setRequestMessage($RequestMessage)
    {
        $this->RequestMessage = $RequestMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return ETIRequestType
     */
    public function setClientID($ClientID)
    {
        $this->ClientID = $ClientID;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return ETIRequestType
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return ETIParameters[]
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * @param ETIParameters[] $Parameters
     * @return ETIRequestType
     */
    public function setParameters(array $Parameters = null)
    {
        $this->Parameters = $Parameters;
        return $this;
    }

}
